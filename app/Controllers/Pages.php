<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login()
    {
        return view('pages/login');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function homepage()
    {
        return view('pages/homepage');
    }

}