<?php 

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimeStamps = true;
    protected $allowedFields = [
        'username', 'password', 'user_id'
    ];
}

?>