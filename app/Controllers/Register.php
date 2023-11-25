<?php 

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PlayerModel;
use CodeIgniter\I18n\Time;

class Register extends BaseController
{
    public function index()
    {
        return view("pages/register");
    }

    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[20]',
                'errors'=> [
                    'required' => '{field} Harus Diisi',
                    'min_length' => '{field} Minimal 8 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                ]
            ],
            'nickname' => [
                'rules' => 'required',
                'errors'=> [
                    'required' => '{field} Harus Diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $id = $this->generateRandomId();

        $users = new UsersModel();
        $player = new PlayerModel();
        $player->insert([
            'player_id' => $id,
            'nickname' => $this->request->getVar('nickname'),
            'created_at' => Time::now()
        ]);
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => MD5($this->request->getVar('password')),
            'user_id' => $id,
            'created_at' => Time::now()
        ]);

        return redirect()->to('/login');
    }

    public function generateRandomId() 
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $randomString = '';
        
        for ($i = 0; $i < 3; $i++) {
            $randomString .= $characters[mt_rand(0, strlen($characters) - 1)];
            $randomString .= $numbers[mt_rand(0, strlen($numbers) - 1)];
        }
        
        return $randomString;
    }

    public function edit_profile()
    {
        if (session()->has('username')) 
        {
            $player = new PlayerModel();
            $data['player'] = $player->find(session('user_id'));
            
            return view('pages/edit_profile', $data);
        }
        
        return view('pages/edit_profile');
    }

    public function edit_process()
    {
        $player_id = $this->request->getVar('player_id');
        $player = new PlayerModel();

        $player->update($player_id, [
            'player_id' => $player_id,
            'nickname' => $this->request->getVar('nickname'),
            'bio' => $this->request->getVar('bio')
        ]);

        return redirect()->to('/profile');
    }

    public function delete()
    {
        $player = new PlayerModel();
        $users = new UsersModel();

        $player->delete(session('user_id'));
        $users->delete(session('username'));

        return redirect()->to('/logout');
    }
}

?>