<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AboutUsModel;

class AboutUsController extends BaseController
{
    protected $aboutUsModel;

    public function __construct()
    {
        $this->aboutUsModel = new AboutUsModel();
    }

    public function index()
    {
        $data['aboutUs'] = $this->aboutUsModel->findAll();
        return view('pages/admin/about_us/index', $data);
    }


    public function edit($id)
    {
        $aboutUs = $this->aboutUsModel->find($id);

        if (!$aboutUs) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Record with ID $id not found.");
        }

        $data = ['aboutUs' => $aboutUs];

        return view('pages/admin/about_us/edit', $data);
    }

    public function update($id)
    {
        $aboutUs = $this->aboutUsModel->find($id);

        if (!$aboutUs) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Record with ID $id not found.");
        }

        $validation = \Config\Services::validation();

        $validationRules = [
            'seo_tag_title_id' => 'required|max_length[255]',
            'seo_tag_title_en' => 'required|max_length[255]',
            'image_founder' => 'is_image[image_founder]|mime_in[image_founder,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = $this->request->getPost();

        // Handle image upload
        $image = $this->request->getFile('image_founder');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(WRITEPATH . '../public/assets/images/founder/', $newName);
            $data['image_founder'] = $newName;

            // Delete the old image if a new one is uploaded
            if (!empty($aboutUs['image_founder']) && file_exists(WRITEPATH . '../public/assets/images/founder/' . $aboutUs['image_founder'])) {
                unlink(WRITEPATH . '../public/assets/images/founder/' . $aboutUs['image_founder']);
            }
        } else {
            unset($data['image_founder']); // Keep the existing image if no new one is uploaded
        }

        // Update the record
        $this->aboutUsModel->update($id, $data);

        return redirect()->to('/admin/about-us')->with('success', 'Record updated successfully.');
    }
}
