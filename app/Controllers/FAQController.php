<?php

namespace App\Controllers;

use App\Models\FAQModel;

use App\Models\DestinationModel;
use App\Models\FAQCategoryModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;

class FAQController extends BaseController
{
    protected $homepageModel;
    protected $destinationModel;
    protected $FAQModel;
    protected $FAQCategoryModel;
    protected $socmedModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->FAQModel = new FAQModel();
        $this->FAQCategoryModel = new FAQCategoryModel();
        $this->socmedModel = new SocialMediaModel();

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

        $data = [
            'title' => $this->FAQModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->FAQModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $locale,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'faqs' => $this->FAQModel->findAll(),
            'faqCategories' => $this->FAQCategoryModel->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
        ];

        // dd($data['faqCategories']);

        echo view('pages/faq', $data);
    }
}
