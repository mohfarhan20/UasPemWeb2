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
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $this->userModel->login_validation($username);
        if(password_verify($password,$cek['password'])){
            echo nl2br(" VERIFIED \n nuser = " . $username . "\n pw = " . $password . "\n pw di db = " . $cek['password']);
        } else {
            echo " UNVERIFIED ";
        }
        dd($cek)
;        if ($cek) {
            // session()->set('username', $cek['username']);
            $data = $this->userModel->findAll();
            dd($data);
            return redirect()->to('Uas/index');
        } else {
            session()->setFlashdata('Username atau Password Salah');
            return redirect()->to('Uas/login');
        }
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
