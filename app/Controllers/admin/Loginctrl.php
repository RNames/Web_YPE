<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\UserModel; // Import the UserModel

class Loginctrl extends BaseController
{
    public function index()
    {
        // Check if the user is already logged in
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('admin/dashboard')); // Redirect to the dashboard if logged in
        }

        // Load the login view if not logged in
        return view('admin/login/index'); // Make sure this view file exists
    }

    public function process()
    {
        $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password')); 

        $dataUser = $users->getUserByUsername($username); 

        if ($dataUser) {
            if ($password === $dataUser->password) {
                session()->set([
                    'username' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin/dashboard')); 
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
