<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Language extends BaseController
{
    public function __construct()
    {
        helper(['url']);
    }

    public function index()
    {
        
        $session = session();
        $locale = $this->request->getLocale();
        $session->remove('lang');
        $session->set('lang', $locale);
        $activeLanguage = session()->get('lang');
        $url = base_url();
        return redirect()->to($url."$activeLanguage");
    }
}
