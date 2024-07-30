<?php

namespace App\Controllers;

use App\Models\ContactUsModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;

class ContactUsController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;
    protected $contactUsModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->socmedModel = new SocialMediaModel();
        $this->contactUsModel = new ContactUsModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        $data = [
            'title' => $this->contactUsModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->contactUsModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'contactUs' => $this->contactUsModel->first(),
        ];

        // dd($data['contactUs']);

        echo view('pages/contact_us', $data);
    }
}
