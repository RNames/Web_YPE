<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\M_user;

class Auth extends BaseController
{
    public function index()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to(base_url('dasboard'));
        }
        return view('admin/login/vw_login');
    }

    public function process()
    {
        $muser = new M_user();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $muser->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            $this->setUserSession($user);
            return redirect()->to(base_url('dasboard'));
        }

        session()->setFlashdata('error', 'Invalid Username or Password');
        return redirect()->back();
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
        return redirect()->to(base_url('admin/login'));
    }
}
