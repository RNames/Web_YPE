<?php

namespace App\Models;

use CodeIgniter\Model;

class M_user extends Model
{
    protected $table = 'users'; // Update table name
    protected $primaryKey = 'id'; // Update primary key
    protected $allowedFields = ['username', 'password']; // Fields allowed for updates

    public function get_data($username, $password)
    {
        // Adjust based on your table structure
        return $this->where('username', $username)->first();
    }
}
