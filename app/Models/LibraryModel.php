<?php

namespace App\Models;

use CodeIgniter\Model;

class LibraryModel extends Model
{
    protected $table            = 'library';
    protected $primaryKey = "player_id";
    protected $returnType       = 'object';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'player_id', 'game_id', 'total_playtime'
    ];
}
