<?php

namespace App\Controllers;

class RedirectController extends BaseController
{
    public function redirectToId()
    {
        return redirect()->to('id');
    }
}
