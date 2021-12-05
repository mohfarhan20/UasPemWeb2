<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'LOGIN';
        return view('auth/login', $data);
    }

    public function register()
    {
        $data['title'] = 'REGISTER';
        return view('auth/register', $data);
    }
}
