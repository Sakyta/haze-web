<?php 

namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $table = "player";
    protected $primaryKey = "player_id";
    protected $returnType = "object";
    protected $useTimeStamps = true;
    protected $allowedFields = [
        'player_id', 'nickname', 'profile_pic', 'bio', 'total_game', 'haze_wallet'
    ];
}

?>