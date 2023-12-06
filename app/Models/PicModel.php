<?php 

namespace App\Models;

use CodeIgniter\Model;

class PicModel extends Model
{
    protected $table = "game_pic";
    protected $primaryKey = "game_id";
    protected $returnType = "object";    
    protected $allowedFields = [
        'game_id', 'game_pic_1', 'game_pic_2', 'game_pic_3', 'game_pic_4'
    ];
}

?>