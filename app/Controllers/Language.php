<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    public function switch($locale)
    {
        // Validate locale (ensure it's either 'en' or 'id')
        if (!in_array($locale, ['en', 'id'])) {
            $locale = 'id'; // Default fallback
        }

        // Set the locale in session
        session()->set('lang', $locale);
        log_message('debug', 'Locale switched to: ' . $locale);
        // Redirect to the appropriate URL
        return redirect()->to("/{$locale}");
    }
}
