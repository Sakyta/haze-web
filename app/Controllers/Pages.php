<?php

namespace App\Controllers;

use App\Models\LibraryModel;
use App\Models\PlayerModel;
use App\Models\GamesModel;
use App\Models\PicModel;
use App\Models\CartModel;

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
            $lib = new LibraryModel();            
            $data['lib'] = [];
            $dataLibrary = $lib->where([
                'player_id' => session('user_id'),
                'game_id' => $id
            ])->first();            
            $data['lib'] = $dataLibrary;

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
            $lib = new LibraryModel();
            $lib->select('library.*, games.game_pic, games.game_name');
            $lib->join('games', 'games.game_id = library.game_id');
            $lib->where([
                'player_id' => session('user_id')
            ]);
            $data['games'] = $lib->get()->getResultArray();
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/library', $data);
        }
        else
        {
            return redirect()->to('/login');
        }
    }

    public function cart()
    {
        if (session()->has('username')) 
        {
            $cart = new CartModel();        
            
            $cart->select('cart.*, games.game_pic, games.game_name, games.price');
            $cart->join('games', 'games.game_id = cart.game_id');
            $cart->where([
                'player_id' => session('user_id')
            ]);
            $data['cart'] = $cart->get()->getResultArray();                  

            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/cart', $data);
        }
        else
        {
            return redirect()->to('/login');
        }        
    }

    public function support ()
    {
        if (session()->has('username')) 
        {
            $data['player'] = $this->player->find(session('user_id'));
            
            return view('pages/support', $data);
        }

        return view('pages/support');
    }
}