<?php

namespace App\Controllers\admin;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Render the dashboard view
        return view('pages/admin/dasboard');
    }
}
