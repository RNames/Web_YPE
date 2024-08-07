<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('pages/admin/dasboard');
    }
}
