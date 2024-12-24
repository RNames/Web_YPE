<?php

namespace App\Controllers;

use App\Models\FAQModel;
use App\Models\USPModel;
use CodeIgniter\HTTP\URI;
use App\Models\AboutUsModel;
use App\Models\HomepageModel;
use App\Models\ServicesModel;
use App\Models\CommitmentModel;
use App\Models\HowItWorksModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Models\TestimonialModel;
use App\Models\ThreePillarsModel;
use App\Controllers\BaseController;
use App\Models\ImageDestinationModel;
use App\Models\InstagramPartnersModel;

class HomepageController extends BaseController
{
    protected $homepageModel;
    protected $aboutUsModel;
    protected $USPModel;
    protected $commitmentModel;
    protected $threePillarsModel;
    protected $howItWorksModel;
    protected $testimonialModel;
    protected $instagramPartnersModel;
    protected $destinationModel;
    protected $imageDestinationModel;
    protected $FAQModel;
    protected $socmedModel;
    protected $servicesModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->homepageModel = new HomepageModel();
        $this->aboutUsModel = new AboutUsModel();
        $this->USPModel = new USPModel();
        $this->commitmentModel = new CommitmentModel();
        $this->threePillarsModel = new ThreePillarsModel();
        $this->howItWorksModel = new HowItWorksModel();
        $this->testimonialModel = new TestimonialModel();
        $this->instagramPartnersModel = new InstagramPartnersModel();
        $this->destinationModel = new DestinationModel();
        $this->imageDestinationModel = new ImageDestinationModel();
        $this->FAQModel = new FAQModel();
        $this->socmedModel = new SocialMediaModel();
        $this->servicesModel = new ServicesModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        $session = session();

        // Detect the language from the URL segment (e.g., /en or /id)
        $segment = $this->request->uri->getSegment(1);
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language if it does not match the detected locale
        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;
        $lang = session()->get('lang') ?? 'id';

        // Set the locale for the current request
        service('request')->setLocale($locale);

        $data = [
            'title' => $this->homepageModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->homepageModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $this->socmedModel->findAll(),
            'homepage' => $this->homepageModel->first(),
            'aboutUs' => $this->aboutUsModel->first(),
            'usp' => $this->USPModel->findAll(),
            'commitments' => $this->commitmentModel->findAll(),
            'threePillars' => $this->threePillarsModel->findAll(),
            'howItWorks' => $this->howItWorksModel->findAll(),
            'testimonials' => $this->testimonialModel->findAll(),
            'faqs' => $this->FAQModel->where(['id <=' => 5])->orderBy('id', 'DESC')->findAll(),
            'destinations' => $this->destinationModel->select([
                'destination.title',
                'destination.slug',
                'destination.duration_id',
                'destination.duration_en',
                'destination.itinerary_notes_id',
                'destination.itinerary_notes_en',
                'MIN(image_destination.image) as image',
                'MIN(image_destination.image_name_id) as image_name_id',
                'MIN(image_destination.image_name_en) as image_name_en',
                'MIN(image_destination.alt_image) as alt_image',
            ])->join('image_destination', 'image_destination.destination_id = destination.id', 'left')->groupBy('destination.id')->findAll(),
            'services' => $this->servicesModel->findAll(),
            'lang' => $lang,
        ];

        echo view('pages/homepage', $data);
    }
}
