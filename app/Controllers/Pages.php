<?php

namespace App\Controllers;

use App\Models\PlayerModel;
use App\Models\GamesModel;
use App\Models\PicModel;

class Pages extends BaseController
{
    protected $player;
    protected $games;
    protected $pic;

    public function __construct()
    {
        $this->player = new PlayerModel();
        $this->games = new GamesModel();
        $this->pic = new PicModel();
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
        $data['games'] = $this->games->findAll();

        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/homepage', $data);
        }

        return view('pages/homepage', $data);
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

    public function games($id)
    {
        $data['games'] = $this->games->find($id);
        $data['pic'] = $this->pic->find($id);
        
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/games', $data);
        }

        return view('pages/games', $data);
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