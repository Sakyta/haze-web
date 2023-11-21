<?php 

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view("pages/register");
    }

    public function process()
    {
        // TODO
    }
}

?>