<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $userTimestamps = true;
    protected $allowedFields = ['nama', 'username', 'password', 'email'];
}
