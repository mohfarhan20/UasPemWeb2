<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $userTimestamps = true;
    protected $allowedFields = ['nama', 'username', 'password', 'email', 'phone', 'address', 'github', 'twitter', 'instagram', 'facebook', 'gambar'];


    public function login_validation($username, $password)
    {
        return $this->table('user')->like('username', $username)->like('password', $password);
        //         ->where(array('username' => $username, 'password' => $password))
        //         ->get()->getRowArray();
    }
}
