<?php

namespace App\Controllers;

use App\Models\ItineraryModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;
use App\Models\ImageDescriptionDestinationModel;

class DestinationController extends BaseController
{
    protected $destinationModel;
    protected $itineraryModel;
    protected $imageDescriptionDestinationModel;
    protected $socmedModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->imageDescriptionDestinationModel = new ImageDescriptionDestinationModel();
        $this->itineraryModel = new ItineraryModel();
        $this->socmedModel = new SocialMediaModel();
        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index(): void
    {
        // $data['title'] = 'Tour Destination – Astrip';
        $data = [
            'title' => $this->destinationModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->destinationModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'destinations' => $this->destinationModel->select([
                'destination.*',
                'MIN(image_destination.image) as image',
                'MIN(image_destination.image_name_id) as image_name_id',
                'MIN(image_destination.image_name_en) as image_name_en'
            ])->join('image_destination', 'image_destination.destination_id = destination.id', 'left')->groupBy('destination.id')->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
        ];

        echo view('pages/destination', $data);
    }

    public function detail($slug = ''): void
    {
        $data = [
            'title' => $this->destinationModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->where('destination.slug', $slug)->first(),
            'description' => $this->destinationModel->select(['seo_description_id', 'seo_description_en'])->where('destination.slug', $slug)->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'destination' => $this->destinationModel->join('image_destination', 'image_destination.destination_id = destination.id', 'left')->where('destination.slug', $slug)->findAll(),
            'itineraries' => $this->itineraryModel->where('destination_slug', $slug)->findAll(),
            'imagesDescriptionDestinations' => $this->imageDescriptionDestinationModel->where('destination_id', $this->destinationModel->select('id')->where('slug', $slug)->first()['id'])->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
        ];

        // dd($data['itineraries']);

        echo view('pages/detail_destination', $data);
    }
}
