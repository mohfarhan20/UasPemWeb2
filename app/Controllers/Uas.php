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
        return view('Uas/index.php');
        // cara konek ke database tanpa model
        // $db = \Config\Database::connect();


    }

    public function functions()
    {
        // Halaman menyimpan fungsi-fungsi yang akan dipakai
        $uas = $this->uasModel->findAll();

        return view('Uas/index.php', $uas);
    }

    public function testDataBase()
    {
        $uas = $this->uasModel->findAll();
        dd($uas);
    }

    public function coba()
    {
        echo "Hello World ";
    }
    public function test()
    {
        return view('Uas/test.php');
    }

    public function login()
    {
        return view('Uas/Login.php');
    }

    public function edit()
    {
        return view('Uas/edit.php');
    }
    public function register()
    {
        return view('Uas/register.php');
    }
}
