<?php

namespace App\Models;

use CodeIgniter\Model;

class HomepageModel extends Model
{
    protected $table            = 'homepage';
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
        'title_id',
        'title_en',
        'sub_title_id',
        'sub_title_en',
        'description_id',
        'description_en',
        'our_services_section_id',
        'our_services_section_en',
        'our_services_title_id',
        'our_services_title_en',
        'our_service_desc_id',
        'our_service_desc_en',
        'testimonial_section_id',
        'testimonial_section_en',
        'testimonial_title_id',
        'testimonial_title_en',
        'commitment_section_id',
        'commitment_section_en',
        'commitment_title_id',
        'commitment_title_en',
        'our_service_desc_id',
        'our_service_desc_en',
        'trending_destination_section_id',
        'trending_destination_section_en',
        'trending_destination_title_id	',
        'trending_destination_title_en',
        'destination_desc_id',
        'destination_desc_en',
        'upcoming_events_section_id',
        'upcoming_events_section_en',
        'upcoming_events_title_id',
        'upcoming_events_title_en',
        'target_market_section_id',
        'target_market_section_en',
        'target_market_title_id',
        'target_market_title_en',
        'usp_section_id',
        'usp_section_en',
        'usp_title_id',
        'usp_title_en',
        'three_pillars_section_id',
        'three_pillars_section_en',
        'three_pillars_title_id',
        'three_pillars_title_en',
        'how_it_works_section_id',
        'how_it_works_section_en',
        'how_it_works_title_id',
        'how_it_works_title_en',
        'article_section_id',
        'article_section_en',
        'article_title_id',
        'article_title_en',
        'instagram_section_id',
        'instagram_section_en',
        'instagram_title_id',
        'instagram_title_en',
        'faq_section_id',
        'faq_section_en',
        'faq_title_id',
        'faq_title_en',
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
