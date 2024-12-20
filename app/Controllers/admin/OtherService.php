<?php

namespace App\Controllers\Admin;

use App\Models\OtherServicesModel;
use App\Models\ServicesModel;
use CodeIgniter\Controller;

class OtherService extends Controller
{
    protected $otherServicesModel;
    protected $ServicesModel;

    public function __construct()
    {
        $this->otherServicesModel = new OtherServicesModel();
        $this->ServicesModel = new ServicesModel();
    }

    public function index()
    {
        $data['other'] = $this->otherServicesModel->findAll();

        return view('pages/admin/other_service/index', $data);
    }



    public function create()
    {
        return view('pages/admin/other_service/create');
    }

    public function store()
    {
        $validationRules = [
            'title_id' => 'required|min_length[3]',
            'title_en' => 'required|min_length[3]',
            'image'    => 'uploaded[image]|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $imageFile = $this->request->getFile('image');
        $imageName = $imageFile->getRandomName();
        $imageFile->move(ROOTPATH . 'public/assets/images/other_services', $imageName);

        $this->otherServicesModel->insert([
            'title_id' => $this->request->getPost('title_id'),
            'title_en' => $this->request->getPost('title_en'),
            'description_id'  => $this->request->getPost('description_id'),
            'description_en'  => $this->request->getPost('description_en'),
            'image'    => $imageName,
        ]);

        return redirect()->to('/admin/other-service')->with('success', 'Destination Event added successfully.');
    }

    public function edit($id)
    {
        $data['other'] = $this->otherServicesModel->find($id);

        return view('pages/admin/other_service/edit', $data);
    }

    public function update($id)
    {
        $validationRules = [
            'title_id' => 'required|min_length[3]',
            'title_en' => 'required|min_length[3]',
            'description_id'  => 'required',
            'description_en'  => 'required',
            'image'    => 'if_exist|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title_id' => $this->request->getPost('title_id'),
            'title_en' => $this->request->getPost('title_en'),
            'description_id'  => $this->request->getPost('description_id'),
            'description_en'  => $this->request->getPost('description_en'),
        ];

        if ($this->request->getFile('image')->isValid()) {
            $imageFile = $this->request->getFile('image');
            $imageName = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . 'public/assets/images/other_services', $imageName);
            $data['image'] = $imageName;
        }

        $this->otherServicesModel->update($id, $data);

        return redirect()->to('/admin/other-service')->with('success', 'Data updated successfully.');
    }

    public function delete($id)
    {
        $event = $this->otherServicesModel->find($id);
        if ($event && file_exists(ROOTPATH . 'public/assets/images/other_services/' . $event['image'])) {
            unlink(ROOTPATH . 'public/assets/images/other_services/' . $event['image']);
        }

        $this->otherServicesModel->delete($id);

        return redirect()->to('/admin/other-service')->with('success', 'Data deleted successfully.');
    }

    public function editService($id)
    {
        $data['other'] = $this->otherServicesModel->find($id);

        return view('pages/admin/other_service/edit_service', $data);
    }

    public function updateService($id)
    {
    
        $data = [
            'seo_tag_title_id' => $this->request->getPost('seo_tag_title_id'),
            'seo_tag_title_en' => $this->request->getPost('seo_tag_title_en'),
            'seo_description_id' => $this->request->getPost('seo_description_id'),
            'seo_description_en' => $this->request->getPost('seo_description_en'),
            'section_title_id' => $this->request->getPost('section_title_id'),
            'section_title_en' => $this->request->getPost('section_title_en'),
        ];

        $this->otherServicesModel->update($id, $data);

        return redirect()->to('/admin/other-service')->with('success', 'Data updated successfully.');
    }
}
