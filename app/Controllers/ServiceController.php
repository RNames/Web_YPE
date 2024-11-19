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
        // Check the URL segment to determine the locale
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
        ];

        echo view('pages/services', $data);
    }

    public function detail($slug = null)
    {
        // Check the URL segment to determine the locale
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
            'service' => $this->serviceModel->where('slug', $slug)->first(),
        ];

        echo view('pages/detail_services', $data);
    }

    public function mice()
    {
        // Check the URL segment to determine the locale
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
            'service' => [
                'head_title' => 'MICE',
                'title_id' => 'Rencanakan acara bisnis Anda dengan sempurna',
                'title_en' => 'Plan your business events perfectly ',
                'desc_id' => 'Melalui layanan MICE kami. Dari konferensi besar hingga acara perusahaan kecil, kami menyediakan fasilitas dan layanan yang dibutuhkan untuk kesuksesan acara Anda',
                'desc_en' => 'Through our MICE services. From large conferences to small corporate events, we provide the facilities and services needed for the success of your event'
            ],
        ];

        echo view('pages/mice', $data);
    }
}
