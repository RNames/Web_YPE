<?php

namespace App\Controllers;

use App\Models\OtherFooterModel;
use App\Models\DestinationModel;
use App\Models\SocialMediaModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class OtherFooterController extends BaseController
{
    protected $destinationModel;
    protected $socmedModel;
    protected $otherfooterModel;

    protected $currentUrl;
    protected $language;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->otherfooterModel = new OtherFooterModel();
        $this->socmedModel = new SocialMediaModel();

        $this->currentUrl = current_url();
        $this->language = session()->get('lang') ?? 'en'; // Default ke 'en' jika tidak ditemukan bahasa
    }

    public function index($slug = null) // Pastikan parameter $slug didefinisikan
    {
        // Pastikan slug diberikan nilai default jika tidak tersedia
        $slug = $slug ?? 'default-slug';

        // Mengambil data yang dibutuhkan
        $title = $this->otherfooterModel->select(["seo_tag_title_{$this->language}"])->first();
        $description = $this->otherfooterModel->select(["seo_description_{$this->language}"])->first();
        $socmeds = $this->socmedModel->findAll();
        $otherfooter = $this->otherfooterModel->where('slug', $slug)->first();

        // Membuat array data yang akan dikirim ke tampilan
        $data = [
            'title' => $title,
            'description' => $description,
            'currentUrl' => $this->currentUrl,
            'language' => $this->language,
            'socmeds' => $socmeds,
            'otherfooter' => $otherfooter,
        ];

        // Mengirim data ke tampilan
        echo view('pages/other_footer', $data);
    }
}
