<?php

namespace App\Controllers;

use App\Models\PenggunaModel;
use \App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $data['title'] = 'LOGIN';
        return view('user/index', $data);
    }

    public function edit()
    {
        $data['title'] = 'REGISTER';
        return view('user/edit', $data);
    }

    protected $userModel;
    public function __construct()
    {
        $this->userModel = new PenggunaModel();
    }

    public function update($id)
    {
        if (!$this->validate([
            'gambar' => [
                'rules' => 'max_size[gambar,5120]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Tipe file wajib berupa gambar',
                    'mime_in' => 'Tipe file wajib berupa gambar'
                ]
            ]
        ])) {
            return redirect()->to('/user/edit')->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            $namaGambar = $fileGambar->getRandomName();
            if ($this->request->getVar('gambarLama') != 'default.jpg')
                unlink('img/' . $this->request->getVar('gambarLama'));
            $fileGambar->move('img', $namaGambar);
        }

        $this->userModel->save(
            [
                'id' => $id,
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'gambar' => $namaGambar,
                'phone' => $this->request->getVar('phone'),
                'address' => $this->request->getVar('address'),
                'github' => $this->request->getVar('github'),
                'twitter' => $this->request->getVar('twitter'),
                'instagram' => $this->request->getVar('instagram'),
                'facebook' => $this->request->getVar('facebook'),
            ]
        );

        session()->setFlashdata('pesan', 'Data berhasil di edit');
        return redirect()->to('/');
    }
}
