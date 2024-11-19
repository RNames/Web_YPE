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

        // Prepare data for the view
        $data = [
            'title' => $this->aboutModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->aboutModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'aboutUs' => $this->aboutModel->first(),
        ];

        echo view('pages/about_us', $data);
    }
}
