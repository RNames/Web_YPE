<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'auth'     => \App\Filters\AuthFilter::class, // Register the AuthFilter here
    ];

    public $globals = [
        'before' => [
            // Global filters to run before every request
            // 'csrf',
        ],
        'after'  => [
            'toolbar',
            // 'honeypot',
        ],
    ];

    public $methods = [];

    public $filters = [
        'auth' => ['before' => [
            'commitment/*', // Apply auth filter to all commitment routes
            'dashboard/*',  // Apply auth filter to dashboard
            'other/admin/sections/*' // Add other admin sections here
        ]]
    ];
}
