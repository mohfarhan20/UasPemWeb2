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

        $cek = $this->userModel->login_validation($username, $password);
        if ($cek) {


            // session()->set('username', $cek['username']);


            $data = $this->userModel->find($username);
            dd($data['username']);

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
