<?php

namespace App\Controllers;

class Template extends BaseController
{
    public function footer()
    {
        return view('template/footer');
    }

    public function header()
    {
        return view('template/header');
    }
}