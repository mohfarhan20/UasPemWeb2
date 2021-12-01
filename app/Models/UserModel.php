<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $useAutoIncrement = true;
    protected $userTimestamps = true;
    protected $allowedFields = ['nama', 'username', 'password', 'email', 'phone', 'address', 'github', 'twitter', 'instagram', 'facebook', 'gambar'];
}
