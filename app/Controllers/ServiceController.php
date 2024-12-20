<?php

namespace App\Controllers;

use App\Models\VIPModel;

use App\Models\ServicesModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Models\HomepageModel;
use App\Controllers\BaseController;
use App\Models\DestinationEventModel;
use CodeIgniter\HTTP\ResponseInterface;

class ServiceController extends BaseController
{
    protected $destinationModel;
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
        $this->destinationModel = new DestinationModel();
        $this->VIPModel = new VIPModel();
        $this->serviceModel = new ServicesModel();
        $this->homepageModel = new HomepageModel();
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
            'homepage' => $this->homepageModel->first(),
        ];

        echo view('pages/services', $data);
    }

    public function vip($slug = null)
    {
        // Check the URL segment to determine the locale
        $segment = $this->request->uri->getSegment(1);
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;

        $defaultId = 1; // Replace this with the actual default ID you want
        $id = $id ?? $defaultId;

        $service = $this->serviceModel->find($id);


        $data = [
            'title' => $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'vips' => $this->VIPModel->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
            'service' => $service
        ];

        echo view('pages/vip_services', $data);
    }

    public function privatetour($id = null)
    {
        $segment = $this->request->uri->getSegment(1);
        $locale = ($segment === 'en') ? 'en' : 'id';

        session()->set('lang', $locale);
        $this->language = $locale;

        // Set a default ID if none is provided
        $defaultId = 2; // Replace this with the actual default ID you want
        $id = $id ?? $defaultId;

        // Fetch service data based on ID
        $service = $this->serviceModel->find($id);

        if (!$service) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Service not found.');
        }

        $titleData = $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->findAll();
        $descriptionData = $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->findAll();

        $data = [
            'title' => $titleData[1] ?? null, // Use the second record or null if it doesn't exist
            'description' => $descriptionData[1] ?? null, // Use the second record or null if it doesn't exist
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'service' => $service,
        ];

        echo view('pages/private_tour', $data);
    }


    public function mice()
    {
        // Check the URL segment to determine the locale
        $segment = $this->request->uri->getSegment(1);
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;

        // Set a default ID if none is provided
        $defaultId = 3; // Replace this with the actual default ID you want
        $id = $id ?? $defaultId;

        // Fetch service data based on ID
        $service = $this->serviceModel->find($id);

        if (!$service) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Service not found.');
        }

        $titleData = $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->findAll();
        $descriptionData = $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->findAll();
        $destinationEvents = $this->destinationEventModel->findAll();

        $data = [
            'title' => $titleData[2] ?? null, // Use the second record or null if it doesn't exist
            'description' => $descriptionData[2] ?? null, // Use the second record or null if it doesn't exist
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'service' => $service,
            'destinationEvents' => $destinationEvents,
        ];

        echo view('pages/mice', $data);
    }

    public function touragent()
    {
        // Check the URL segment to determine the locale
        $segment = $this->request->uri->getSegment(1);
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;

        // Set a default ID if none is provided
        $defaultId = 4; // Replace this with the actual default ID you want
        $id = $id ?? $defaultId;

        // Fetch service data based on ID
        $service = $this->serviceModel->find($id);

        if (!$service) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Service not found.');
        }
        $titleData = $this->serviceModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->findAll();
        $descriptionData = $this->serviceModel->select(['seo_description_id', 'seo_description_en'])->findAll();

        $data = [
            'title' => $titleData[3] ?? null, // Use the second record or null if it doesn't exist
            'description' => $descriptionData[3] ?? null, // Use the second record or null if it doesn't exist
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'service' => $service,
        ];

        echo view('pages/tour_agent', $data);
    }
}
