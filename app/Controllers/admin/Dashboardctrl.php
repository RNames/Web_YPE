<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboardctrl extends BaseController
{
    public function index(): void
    {
       $data['title'] = 'Contact Us – Astrip';
        $data['language'] = 'id';
        // $data['title'] = 'Contact Us – Astrip';
        // $data['language'] = 'id';

        echo view('pages/admin/dasboard', $data);
        // echo view('pages/dasboard', $data);

        echo "dashboard admin";
    }
}
