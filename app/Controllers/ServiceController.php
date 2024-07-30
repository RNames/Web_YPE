<?php

namespace App\Controllers;

use App\Models\ServicesModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;
    protected $serviceModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->serviceModel = new ServicesModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
        $this->socmedModel = new SocialMediaModel();
    }

    public function index()
    {
        $data = [
            'title' => $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'services' => $this->serviceModel->findAll(),
        ];

        echo view('pages/services', $data);
    }

    public function detail($slug = null){
        $data = [
            'title' => $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'service' => $this->serviceModel->where('slug', $slug)->first(),
        ];

        echo view('pages/detail_services', $data);
    }
}
