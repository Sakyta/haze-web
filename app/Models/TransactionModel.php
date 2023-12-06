<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table            = 'transaction';
    protected $primaryKey       = 'transaction_id';
    protected $returnType       = 'object';
    protected $allowedFields    = [
        'transaction_id', 'subtotal', 'transaction_date', 'player_id', 'game_id'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
