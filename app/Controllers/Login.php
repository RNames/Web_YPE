<?php

namespace App\Controllers\admin;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function index()
    {
        // Check if user is already logged in
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('admin/dashboard')); // Adjust route if necessary
        }

        // Load login view if not logged in
        return view('admin/login/index');
    }

    public function process()
    {
        $users = new UserModel(); // Use the new UserModel
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = $users->getUserByUsername($username);

        if ($dataUser) {
            // Check if password matches (adjust if using hashed passwords)
            if ($password === $dataUser->password) {
                session()->set([
                    'username' => $dataUser->username,
                    'email' => $dataUser->email,
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
        return redirect()->to('/login'); // Ensure this route exists
    }
}
