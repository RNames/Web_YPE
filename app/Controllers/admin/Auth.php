<?php

namespace App\Controllers\admin;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        return view('pages/admin/login');
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Example stored hashed password
        $storedHashedPassword = 'ee11cbb19052e40b07aac0ca060c23ee';

        $inputHashedPassword = md5($password);

        if ($inputHashedPassword === $storedHashedPassword) {
            session()->set('logged_in', true);
            session()->set('username', $username);
            return redirect()->to('/admin/dasboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function logoutPage()
{
    session()->destroy();
    return redirect()->to('/admin/login'); // Redirect to login page after logout
}

}
