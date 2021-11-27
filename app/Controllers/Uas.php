<?php

namespace App\Controllers;

class Uas extends BaseController
{
    public function index()
    {
        echo "Ini adalah Halaman Uas";
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
    }

    public function edit()
    {
    }
    public function home()
    {
    }
}
