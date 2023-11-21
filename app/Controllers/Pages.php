<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function dashboard()
    {
        return view('pages/dashboard');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function homepage()
    {
        return view('pages/homepage');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function games()
    {
        return view('pages/games');
    }
}