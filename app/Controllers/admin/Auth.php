<?php

// C:\projectcomp\ype.kadinkotamalang.com\app\Controllers\admin\Auth.php

namespace App\Controllers\admin;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        // Render the login view
        return view('pages/admin/login');
    }

    public function process()
{
    $session = session();
    $model = new UserModel();

    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $data = $model->where('username', $username)->first();

    if ($data) {
        $pass = $data['password'];
        $verify_pass = md5($password);
        if ($verify_pass == $pass) {
            $ses_data = [
                'id' => $data['id'],
                'username' => $data['username'],
                'logged_in' => TRUE
            ];
            $session->set($ses_data);
            log_message('debug', 'Redirecting to dashboard');
            return redirect()->to('admin/dasboard');
        } else {
            log_message('debug', 'Wrong password');
            $session->setFlashdata('msg', 'Wrong Password');
            return redirect()->to('admin/login');
        }
    } else {
        log_message('debug', 'Username not found');
        $session->setFlashdata('msg', 'Username not Found');
        return redirect()->to('admin/login');
    }
}

    // Commented out the logout function
    // public function logout()
    // {
    //     $session = session();
    //     $session->destroy();
    //     return redirect()->to('admin/login');
    // }
}

