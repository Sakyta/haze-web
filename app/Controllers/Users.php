<?php 

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PlayerModel;
use CodeIgniter\I18n\Time;

class Users extends BaseController
{
    public function login()
    {
        return view("pages/login");
    }

    public function loginProcess()
    {
        $users = new UsersModel();
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        $dataUser = $users->where([
            "username"=> $username
        ])->first();

        if ($dataUser) 
        {
            if (MD5($password) == $dataUser->password)
            {
                session()->set([
                    "username" => $dataUser->username,
                    "user_id"  => $dataUser->user_id,
                    'logged_in' => TRUE
                ]);

                session()->setFlashdata('message', 'Login Success!');
                return redirect()->to('/homepage');
            }
            else
            {
                session()->setFlashdata('error','Incorrect Username or Password');
                return redirect()->back();
            }
        }
        else
        {
            session()->setFlashdata('error','Incorrect Username or Password');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session_unset();
        session()->destroy();        
        return redirect()->to('/login');
    }
    
    public function register()
    {
        return view("pages/register");
    }

    public function registerProcess()
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

        session()->setFlashdata('message', 'Register Success!');
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
        $player = new PlayerModel();
        $player_id = $this->request->getVar('player_id');
        
        if (!$this->validate([
            'nickname' => [
                'rules' => 'required',
                'errors'=> [
                    'required' => '{field} Harus Diisi'
                ]
            ],
            'profile_pic' => [
                'rules' => 'is_image[profile_pic]|max_size[profile_pic, 4096]|max_dims[profile_pic, 2000,2000]',
                'errors' => [
                    'is_image' => 'File is Not an Image!',
                    'max_size' => 'Exceeding max file size! Max File Size = 5MB',
                    'max_dims' => 'Exceeding max size! Max Size = 2000x2000'                    
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        };

        $img = $this->request->getFile('profile_pic'); 
        
        if (!$img)
        {
            $imgData = base64_encode(file_get_contents($img)); 
            $player->update($player_id, [
                'player_id' => $player_id,
                'nickname' => $this->request->getVar('nickname'),        
                'profile_pic' => $imgData,
                'bio' => $this->request->getVar('bio')
            ]);
        }
        else
        {
            $player->update($player_id, [
                'player_id' => $player_id,
                'nickname' => $this->request->getVar('nickname'),                    
                'bio' => $this->request->getVar('bio')
            ]);
        }
        
        session()->setFlashdata('message', 'Profile Edited');
        return redirect()->to('/profile');
    }

    public function delete()
    {
        $player = new PlayerModel();
        $users = new UsersModel();

        $player->delete(session('user_id'));
        $users->delete(session('username'));

        session()->setFlashdata('message', 'Account Deleted');
        return redirect()->to('/logout');
    }
}

?>