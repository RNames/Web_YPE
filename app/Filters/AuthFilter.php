<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // If the user is not logged in
        if (!session()->get('isLoggedIn')) {
            if ($request->uri->getPath() !== 'admin/login') {
                return redirect()->to(base_url('admin/login'));
            }
        } else {
            // If the user is trying to access the login page while logged in, redirect to dashboard
            if ($request->uri->getPath() === 'admin/login') {
                return redirect()->to(base_url('dasboard'));
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing
    }
}
