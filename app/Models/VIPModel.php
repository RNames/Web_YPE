<?php

namespace App\Models;

use CodeIgniter\Model;

class VIPModel extends Model
{
    protected $table            = 'vip';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['
    id_vip_category', 
    'title_id', 
    'title_en', 
    'description_id', 
    'description_en', 
    'seo_tag_title_id', 
    'seo_tag_title_en', 
    'seo_description_id', 
    'seo_description_en', 
    'vip_section_id', 
    'vip_section_en', 
    'vip_title_id', 
    'vip_title_en'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Tambahkan metode getAll
    public function getAll()
    {
        return $this->findAll();
    }
}
