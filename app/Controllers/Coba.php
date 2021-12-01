<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "Hello World fdf";
    }

    public function about($nama = ' ', $umur = 100)
    {
        echo "Halo nama saya $nama, saya berumur $umur tahun ";
    }
}
