<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\LibraryModel;
use App\Models\PlayerModel;

class Cart extends BaseController
{
    protected $cart;
    protected $library;
    
    public function __construct()
    {
        $this->cart = new CartModel();
        $this->library = new LibraryModel();
    }

    public function add($game_id)
    {
        $this->cart->insert([
            'player_id' => session('user_id'),
            'game_id' => $game_id
        ]);

        session()->setFlashdata('message', 'Add to Cart Success');
        return redirect()->to('/cart');
    }

    public function remove($cart_id)
    {
        $this->cart->delete($cart_id);

        session()->setFlashdata('message', 'Delete Item Success');
        return redirect()->to('/cart');
    }

    public function buy()
    {
        $data = $this->cart->where([
            "player_id" => session('user_id')
        ])->findAll();
        $player = new PlayerModel();
        $dataPlayer = $player->where([
            "player_id" => session('user_id')
        ])->first();

        $counter = $dataPlayer->total_game;          

        foreach ($data as $dummy)
        {
            $this->library->insert([
                'player_id' => $dummy->player_id,
                'game_id' => $dummy->game_id
            ]);

            $this->cart->delete($dummy->cart_id);
            $counter++;
        }

        $player->update(session('user_id'), [
            'total_game' => $counter
        ]);

        return redirect()->to('/library');
    }
}
