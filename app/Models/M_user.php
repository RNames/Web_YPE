<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'users'; // Ensure this matches your database table
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'password'];
}
?>
