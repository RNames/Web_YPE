<?php

namespace App\Models;

use CodeIgniter\Model;

class AboutUsModel extends Model
{
    protected $table            = 'about_us';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'seo_tag_title_id',
        'seo_tag_title_en',
        'seo_description_id',
        'seo_description_en',
        'heading_id',
        'heading_en',
        'section_id',
        'section_en',
        'title_id',
        'title_en',
        'description_id', 
        'description_en',
        'image',
        'year',
        'year_title_id',
        'year_title_en',
        'destination_number',
        'destination_number_title_id',
        'destination_number_title_en',
        'rating',
        'rating_title_id',
        'rating_title_en',
        'section_message_id',
        'section_message_en',
        'title_message_id',
        'title_message_en',
        'message_id',
        'message_en',
        'image_founder',
        'name',
        'founder',
    ];

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
}
