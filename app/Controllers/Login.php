<?php 

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view("pages/login");
    }

    public function process()
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
}

?>