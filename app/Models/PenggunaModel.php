<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;

    protected $allowedFields = [
        'id','nama','email','address','gambar','phone','github','twitter','instagram','facebook'
    ];

    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
