<?php

namespace App\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;
use CodeIgniter\Exceptions\FrameworkException;

class PageNotFoundException extends FrameworkException implements ExceptionInterface
{
    protected $code = 404;
}
