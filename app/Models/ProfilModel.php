<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'username', 'password', 'nama_perusahaan', 'deskripsi_perusahaan_in', 'deskripsi_perusahaan_en',
        'title_website', 'alamat', 'deskripsi_kontak_in', 'deskripsi_kontak_en', 'link_maps', 'link_whatsapp',
        'no_hp', 'email', 'favicon_website', 'logo_perusahaan', 'foto_utama'
    ];
}
