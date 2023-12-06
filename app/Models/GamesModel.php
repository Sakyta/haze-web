<?php 

namespace App\Models;

use CodeIgniter\Model;

class GamesModel extends Model
{
    protected $table = "games";
    protected $primaryKey = "game_id";
    protected $returnType = "object";
    protected $useTimeStamps = true;
    protected $allowedFields = [
        'game_id', 'game_name', 'game_description', 'price', 'genre', 'rating', 'game_pic', 'release_date', 'developer', 'publisher'
    ];
}

?>