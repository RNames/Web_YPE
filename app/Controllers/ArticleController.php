<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\ServicesModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Models\ImageArticleModel;
use App\Controllers\BaseController;

class ArticleController extends BaseController
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

    public function index(): void
    {

        // Check the URL segment to determine the locale
        $segment = $this->request->uri->getSegment(1);

        // Ensure the locale is either 'id' or 'en', default to 'id' if invalid
        $locale = ($segment === 'en') ? 'en' : 'id';

        // Update the session language
        session()->set('lang', $locale);
        $this->language = $locale;

        $data = [
            'title' => $this->articleModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->articleModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'articles' => $this->articleModel->findAll(),
            'latestArticle' => $this->articleModel->orderBy('id', 'DESC')->limit(5)->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
            'services' => $this->servicesModel->findAll()
        ];

        // dd($data['latestArticle']);

        echo view('pages/article', $data);
    }

    public function detail($slug = '')
    {
        $field = $this->language == 'en' ? 'slug_en' : 'slug';
        $locale = session('lang') ?? 'id';
        $article = $this->articleModel->where($field, $slug)->first();

        $article = $this->articleModel->where('slug', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        if (!$article) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Article with slug $slug not found");
        }

        // Tentukan slug yang benar berdasarkan bahasa yang dipilih
        $slug_id = $article['slug'];
        $slug_en = $article['slug_en'];
        $slug_baru = ($locale === 'id') ? $slug_id : $slug_en;

        // Tentukan prefix URL berdasarkan bahasa
        $prefix_url = ($locale === 'id') ? 'blog' : 'blog';

        // Jika slug di URL tidak sesuai dengan bahasa yang dipilih, redirect ke slug yang benar
        if ($slug !== $slug_baru) {
            return redirect()->to(base_url($locale . '/' . $prefix_url . '/' . $slug_baru));
        }


        $data = [
            'title' => $this->articleModel->select(['seo_tag_title_id', 'seo_tag_title_en'])->first(),
            'description' => $this->articleModel->select(['seo_description_id', 'seo_description_en'])->first(),
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'article' => $article,
            'imageArticles' => $this->imageArticleModel->where('article_id', $article['id'])->findAll(),
            'latestArticle' => $this->articleModel->orderBy('id', 'DESC')->limit(5)->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
            'services' => $this->servicesModel->findAll()
        ];

        echo view('pages/detail_article', $data);
    }
}
