<?php

namespace App\Controllers;

use App\Models\DestinationModel;
use App\Models\SocialMediaModel;

class ErrorController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->socmedModel = new SocialMediaModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang');
    }
    public function show404()
    {
        $data = [
            'title' => [
                'seo_tag_title_id' => 'Halaman Tidak Ditemukan',
                'seo_tag_title_en' => 'Page Not Found',
            ],
            'description' => [
                'seo_description_id' => 'Halaman yang Anda cari tidak ditemukan. Silakan kembali ke halaman utama.',
                'seo_description_en' => 'The page you are looking for is not found. Please return to the homepage.',
            ],
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'navbarDestinations' => $this->destinationModel->select(['title', 'slug'])->findAll(),
            'socmeds' => $this->socmedModel->findAll(),
        ];

        return view('pages/errors/error_404', $data);
    }
}
