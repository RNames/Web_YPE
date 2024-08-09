<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class TestFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Test filter logic
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Test filter logic
    }
}
