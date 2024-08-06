<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to(base_url('admin/login'));
        }

        return view('pages/admin/dasboard'); // Corrected path
    }
}
?>
