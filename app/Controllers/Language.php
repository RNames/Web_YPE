<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Language extends BaseController
{
    

    public function switchLanguage($lang)
    {
        // Ensure the language is valid
        if (in_array($lang, ['en', 'id'])) {
            session()->set('lang', $lang); // Set the language in session
        }
    
        // Get the current URI and remove the existing language prefix
        $currentUri = uri_string();
        $currentUri = preg_replace('#^(id|en)/?#', '', $currentUri); // Remove the current language prefix
    
        // Redirect to the new language-prefixed URL
        return redirect()->to(base_url("{$lang}" . ($currentUri ? "/{$currentUri}" : '')));
    }
    
    
}
