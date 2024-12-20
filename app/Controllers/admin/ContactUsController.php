<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ContactUsModel;

class ContactUsController extends BaseController
{
    protected $contactUsModel;

    public function __construct()
    {
        $this->contactUsModel = new ContactUsModel();
    }

    public function index()
    {
        $data['contactUs'] = $this->contactUsModel->findAll();

        return view('pages/admin/contact_us/index', $data);
    }


    public function edit($id)
    {
        $data['contactUs'] = $this->contactUsModel->find($id);

        if (!$data['contactUs']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data not found');
        }

        return view('pages/admin/contact_us/edit', $data);
    }

    public function update($id)
    {
        $this->contactUsModel->update($id, $this->request->getPost());
        return redirect()->to('/admin/contact-us')->with('success', 'Contact Us updated successfully');
    }

}
