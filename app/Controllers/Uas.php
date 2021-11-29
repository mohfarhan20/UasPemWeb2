<?php

namespace App\Controllers;

use App\Models\UserModel;

class Uas extends BaseController
{
    protected $uasModel;

    public function __construct()
    {
        $this->uasModel = new UserModel();
    }



    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        return view('login');
    }

    public function edit()
    {
        return view('edit');
    }
    public function register()
    {
        return view('register');
    }
}
