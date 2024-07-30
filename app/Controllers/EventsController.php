<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\ServicesModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Models\ImageArticleModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EventsController extends BaseController
{
    protected $articleModel;
    protected $destinationModel;
    protected $imageArticleModel;
    protected $socmedModel;
    protected $servicesModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
        $this->destinationModel = new DestinationModel();
        $this->imageArticleModel = new ImageArticleModel();
        $this->socmedModel = new SocialMediaModel();
        $this->servicesModel = new ServicesModel();
        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }

    public function index($slug = 'enjoying-natures-beauty-at-the-mountain-peak-an-unforgettable-adventure', $id = 1)
    {
        $data = [
            'title' => [
                'seo_tag_title_id' => 'Events',
                'seo_tag_title_en' => 'Events',
            ],
            'description' => $this->articleModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'article' => $this->articleModel->where('slug', $slug)->first(),
            'imageArticles' => $this->imageArticleModel->where('article_id', $id)->findAll(),
            'latestArticle' => $this->articleModel->orderBy('id', 'DESC')->limit(5)->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
            'services' => $this->servicesModel->findAll()
        ];

        // dd($data);

        echo view('pages/events', $data);
    }
}
