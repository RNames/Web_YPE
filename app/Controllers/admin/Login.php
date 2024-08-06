<?php 

namespace App\Controllers\admin;

use App\Models\M_user;

class Login extends BaseController
{
    public function index()
    {
        return view('pages/admin/user_form');
    }
   
    public function login_action() 
    {
        $muser = new M_user();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $muser->get_data($username, $password);

        if (($cek['username1'] == $username) && ($cek['password1'] == $password))
        {
            session()->set('username1', $cek['username1']);
            session()->set('password1', $cek['password1']);
            session()->set('id', $cek['id']);
            return redirect()->to(base_url('admin/dasboard'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout() 
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
