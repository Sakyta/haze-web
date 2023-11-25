<?php

namespace App\Controllers;

use App\Models\PlayerModel;

class Pages extends BaseController
{
    protected $player;

    public function __construct()
    {
        $this->player = new PlayerModel();
    }

    public function dashboard()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/dashboard', $data);
        }

        return view('pages/dashboard');
    }

    public function homepage()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/homepage', $data);
        }

        return view('pages/homepage');
    }

    public function about()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/about', $data);
        }

        return view('pages/about');
    }

    public function games()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/games', $data);
        }

        return view('pages/games');
    }

    public function profile()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/profile', $data);
        }

        return redirect()->to('/login');
    }

    public function library()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/library', $data);
        }

        return view('pages/library');
    }
}