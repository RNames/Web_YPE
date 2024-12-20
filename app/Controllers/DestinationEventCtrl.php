<?php

namespace App\Controllers;

use App\Models\VIPModel;

use App\Models\ServicesModel;
use App\Models\DestinationEventModel;
use App\Models\SocialMediaModel;
use App\Models\HomepageModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DestinationEventCtrl extends Controller
{
    protected $socmedModel;
    protected $VIPModel;
    protected $serviceModel;
    protected $destinationEventModel;
    protected $homepageModel;
    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationEventModel = new DestinationEventModel();
        $this->VIPModel = new VIPModel();
        $this->serviceModel = new ServicesModel();
        $this->homepageModel = new HomepageModel();
        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
        $this->socmedModel = new SocialMediaModel();
    }

    public function index()
    {
        $segment = $this->request->uri->getSegment(1);

        // Ensure the locale is either 'id' or 'en', default to 'id' if invalid
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;

        $data = [
            'title' => $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'services' => $this->serviceModel->findAll(),
            'homepage' => $this->homepageModel->first(),
        ];

        $data['destinationEvents'] = $this->destinationEventModel->findAll();
    }
}
