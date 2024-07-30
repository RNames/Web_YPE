<?php

namespace App\Controllers;

use App\Models\AboutUsModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;

class AboutUsController extends BaseController
{
    protected $socmedModel;
    protected $destinationModel;
    protected $aboutModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->socmedModel = new SocialMediaModel();
        $this->aboutModel = new AboutUsModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        $data = [
            'title' => $this->aboutModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->aboutModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'aboutUs' => $this->aboutModel->first(),
        ];

        // dd($data['aboutUs']);

        echo view('pages/about_us', $data);
    }
}
