<?php

namespace App\Models;

use CodeIgniter\Model;

class MiceModel extends Model
{
    protected $table      = 'mice';
    protected $primaryKey = 'id';
    protected $allowedFields = ['mice_title_id', 'mice_title_en', 'mice_desc_id', 'mice_desc_en'];
}
