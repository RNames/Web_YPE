<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;
use App\Models\OtherServicesModel;
use CodeIgniter\HTTP\ResponseInterface;

class OtherServicesController extends BaseController
{
    protected $destinationModel;
    protected $otherServicesModel;
    protected $socmedModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->otherServicesModel = new OtherServicesModel();
        $this->socmedModel = new SocialMediaModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        // Check the URL segment to determine the locale
        $segment = $this->request->uri->getSegment(1);

        // Ensure the locale is either 'id' or 'en', default to 'id' if invalid
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;
        
        $data = [
            'title' => $this->otherServicesModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->otherServicesModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'otherServices' => $this->otherServicesModel->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
        ];

        // dd($data['otherServices']);

        echo view('pages/other_services', $data);
    }
}
