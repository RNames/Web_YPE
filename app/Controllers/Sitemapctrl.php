<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\AboutUsModel;
use App\Models\ArticleModel;
use App\Models\CommitmentModel;
use App\Models\ContactUsModel;
use App\Models\CorporateModel;
use App\Models\DestinationModel;
use App\Models\DetailCorporateAgentModel;
use App\Models\FAQCategoryModel;
use App\Models\FAQModel;
use App\Models\FounderSosmedModel;
use App\Models\HomepageModel;
use App\Models\HowItWorksModel;
use App\Models\ImageArticleModel;
use App\Models\ImageDescriptionDestinationModel;
use App\Models\ImageDestinationModel;
use App\Models\InstagramPartnersModel;
use App\Models\ItineraryModel;
use App\Models\OtherFooterModel;
use App\Models\OtherServicesModel;
use App\Models\ProfilModel;
use App\Models\ServicesModel;
use App\Models\SocialMediaModel;
use App\Models\TestimonialModel;
use App\Models\ThreePillarsModel;
use App\Models\UserModel;
use App\Models\USPModel;


class SitemapController extends BaseController
{
    protected $homepageModel;
    protected $aboutUsModel;
    protected $uspModel;
    protected $commitmentModel;
    protected $threePillarsModel;
    protected $howItWorksModel;
    protected $testimonialModel;
    protected $destinationModel;
    protected $faqModel;
    protected $servicesModel;

    // Tambahkan deklarasi properti model lainnya
    protected $articleModel;
    protected $contactUsModel;
    protected $corporateModel;
    protected $detailCorporateAgentModel;
    protected $faqCategoryModel;
    protected $founderSosmedModel;
    protected $imageArticleModel;
    protected $imageDescriptionDestinationModel;
    protected $imageDestinationModel;
    protected $instagramPartnersModel;
    protected $itineraryModel;
    protected $otherFooterModel;
    protected $otherServicesModel;
    protected $profilModel;
    protected $socialMediaModel;
    protected $userModel;

    public function __construct()
    {
        $this->homepageModel = new HomepageModel();
        $this->aboutUsModel = new AboutUsModel();
        $this->uspModel = new USPModel();
        $this->commitmentModel = new CommitmentModel();
        $this->threePillarsModel = new ThreePillarsModel();
        $this->howItWorksModel = new HowItWorksModel();
        $this->testimonialModel = new TestimonialModel();
        $this->destinationModel = new DestinationModel();
        $this->faqModel = new FAQModel();
        $this->servicesModel = new ServicesModel();

        // Model tambahan
        $this->articleModel = new ArticleModel();
        $this->contactUsModel = new ContactUsModel();
        $this->corporateModel = new CorporateModel();
        $this->detailCorporateAgentModel = new DetailCorporateAgentModel();
        $this->faqCategoryModel = new FAQCategoryModel();
        $this->founderSosmedModel = new FounderSosmedModel();
        $this->imageArticleModel = new ImageArticleModel();
        $this->imageDescriptionDestinationModel = new ImageDescriptionDestinationModel();
        $this->imageDestinationModel = new ImageDestinationModel();
        $this->instagramPartnersModel = new InstagramPartnersModel();
        $this->itineraryModel = new ItineraryModel();
        $this->otherFooterModel = new OtherFooterModel();
        $this->otherServicesModel = new OtherServicesModel();
        $this->profilModel = new ProfilModel();
        $this->socialMediaModel = new SocialMediaModel();
        $this->userModel = new UserModel();
    }


    public function index()
    {
        $lang = session()->get('lang') ?? 'id';

        // Data statis
        $data = [
            'home' => [
                'id' => ['url' => base_url('id'), 'name' => 'Beranda'],
                'en' => ['url' => base_url('en'), 'name' => 'Home'],
            ],
            'about' => [
                'id' => ['url' => base_url('id/tentang-kami'), 'name' => 'Tentang Kami'],
                'en' => ['url' => base_url('en/about-us'), 'name' => 'About Us'],
            ],
            'faq' => [
                'id' => ['url' => base_url('id/faq'), 'name' => 'FAQ'],
                'en' => ['url' => base_url('en/faq'), 'name' => 'FAQ'],
            ],
            'services' => [
                'id' => ['url' => base_url('id/layanan-kami'), 'name' => 'Layanan Kami', 'subpages' => []],
                'en' => ['url' => base_url('en/our-services'), 'name' => 'Our Services', 'subpages' => []],
            ],
            'destinations' => [
                'id' => ['url' => base_url('id/destinasi'), 'name' => 'Destinasi', 'subpages' => []],
                'en' => ['url' => base_url('en/destination'), 'name' => 'Destination', 'subpages' => []],
            ],
            'contact' => [
                'id' => ['url' => base_url('id/hubungi-kami'), 'name' => 'Hubungi Kami'],
                'en' => ['url' => base_url('en/contact-us'), 'name' => 'Contact Us'],
            ],
        ];

        // Tambahkan subpages dari database
        $services = $this->servicesModel->findAll();
        foreach ($services as $service) {
            $data['services']['id']['subpages'][] = [
                'url' => base_url('id/layanan-kami/' . $service['slug']),
                'name' => $service['name_id'],
            ];
            $data['services']['en']['subpages'][] = [
                'url' => base_url('en/our-services/' . $service['slug']),
                'name' => $service['name_en'],
            ];
        }

        $destinations = $this->destinationModel->findAll();
        foreach ($destinations as $destination) {
            $data['destinations']['id']['subpages'][] = [
                'url' => base_url('id/destinasi/' . $destination['slug']),
                'name' => $destination['title'],
            ];
            $data['destinations']['en']['subpages'][] = [
                'url' => base_url('en/destination/' . $destination['slug']),
                'name' => $destination['title'],
            ];
        }

        // Filter data berdasarkan bahasa
        $filteredData = [];
        foreach ($data as $key => $value) {
            if (isset($value[$lang])) {
                $filteredData[$key] = $value[$lang];
            }
        }

        return view('sitemap', ['data' => $filteredData, 'lang' => $lang]);
    }
}
