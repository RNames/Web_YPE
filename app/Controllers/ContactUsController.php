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
        // Detect the language segment from the URL (first segment)
        $segment = $this->request->uri->getSegment(1);

        // Determine the locale based on the URL segment
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language if it does not match the detected locale
        if (session()->get('lang') !== $locale) {
            session()->set('lang', $locale);
        }

        // Set the locale for the current request
        service('request')->setLocale($locale);

        // Prepare data for the view
        $data = [
            'title' => $this->contactUsModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->contactUsModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $locale,
            'socmeds' => $this->socmedModel->findAll(),
            'contactUs' => $this->contactUsModel->first(),
        ];

        echo view('pages/contact_us', $data);

        log_message('info', 'Detected language: ' . session()->get('lang'));

    }
}
