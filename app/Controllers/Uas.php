<?php

namespace App\Controllers;

use App\Models\UserModel;

class Uas extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login_validation()
    {
        return "Test";
    }



    public function index()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login', $data);
    }

    public function logout()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Edit'
        ];
        return view('edit', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('register', $data);
    }
}
