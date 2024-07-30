<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GalleryController extends BaseController
{
    public function index(): void
    {
        $data['title'] = 'Gallery – Astrip';
        $data['language'] = 'id';

        echo view('pages/gallery', $data);
    }

    public function detail(): void
    {
        $data['title'] = 'Gallery – Astrip';
        $data['language'] = 'id';

        echo view('pages/detail_gallery', $data);
    }
}
