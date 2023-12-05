<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CartModel;
use App\Models\LibraryModel;
use App\Models\PlayerModel;
use App\Models\TransactionModel;
use CodeIgniter\I18n\Time;

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
        $transaction = new TransactionModel();
        $transactionId = $this->generateTransactionId();

        $counter = $dataPlayer->total_game;        

        $this->cart->select('cart.*, games.game_pic, games.game_name, games.price');
        $this->cart->join('games', 'games.game_id = cart.game_id');
        $this->cart->where([
            'player_id' => session('user_id')
        ]);
        $dataCart = $this->cart->get()->getResultObject();
        $subtotal = 0;
        foreach ($dataCart as $dummy)
        {
            $subtotal += $dummy->price;
        }  

        foreach ($data as $dummy)
        {
            $this->library->insert([
                'player_id' => $dummy->player_id,
                'game_id' => $dummy->game_id
            ]);

            $this->cart->delete($dummy->cart_id);
            $counter++;

            $transaction->insert([
                'transaction_id' => $transactionId,
                'subtotal' => $subtotal,
                'transaction_date' => Time::now()->toDateString(),
                'player_id' => session('user_id'),
                'game_id' => $dummy->game_id
            ]);
        }

        $player->update(session('user_id'), [
            'total_game' => $counter
        ]);

        return redirect()->to('/transaction/' . $transactionId);
    }

    public function generateTransactionId()
    {
        $numbers = '0123456789';
        $randomId = '';

        for ($i = 0; $i < 5; $i++)
        {
            $randomId .= $numbers[mt_rand(0, strlen($numbers) - 1)];
        }

        return $randomId;
    }
}
