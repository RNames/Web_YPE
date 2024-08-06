<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\M_user;

class Auth extends BaseController
{
    public function index()
    {
        return view('admin/login/vw_login'); // Corrected path
    }

    public function process()
    {
        $muser = new M_user();
        $username = $this->request->getPost('username'); // Retrieve the username from the form
        $password = $this->request->getPost('password'); // Retrieve the password from the form

        $user = $muser->where('username', $username)->first(); // Fetch user from the database

        if ($user && password_verify($password, $user['password'])) {
            $this->setUserSession($user); // Set user session if password matches
            return redirect()->to(base_url('admin/dasboard')); // Redirect to dashboard
        }

        session()->setFlashdata('error', 'Invalid Username or Password'); // Set error message if authentication fails
        return redirect()->back(); // Redirect back to the login page
    }

    private function setUserSession($user)
    {
        $data = [
            'username' => $user['username'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
