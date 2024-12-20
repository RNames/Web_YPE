<?php

namespace App\Controllers\admin;

use App\Models\VIPModel;
use App\Models\ServicesModel; // Include ServicesModel
use CodeIgniter\Controller;

class Vipctrl extends Controller
{
    protected $VIPModel;
    protected $ServicesModel;

    public function __construct()
    {
        $this->VIPModel = new VIPModel();
        $this->ServicesModel = new ServicesModel(); // Instantiate ServicesModel
    }

    // Index method
    public function index()
    {
        // Fetch VIP data
        $data['vips'] = $this->VIPModel->findAll();

        // Fetch only the first service record
        $data['service'] = $this->ServicesModel->first();  // Fetch first record

        // Pass the data to the view
        return view('pages/admin/vip/index', $data);
    }

    // Create method for VIP
    public function create()
    {
        // Handle the create form submission
        if ($this->request->getMethod() === 'post') {
            // Validation rules for VIP
            $validationRules = [
                'title_id' => 'required|min_length[3]',
                'title_en' => 'required|min_length[3]',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Insert the data into the database
            $this->VIPModel->insert([
                'title_id'       => $this->request->getPost('title_id'),
                'title_en'       => $this->request->getPost('title_en'),
                'description_id' => $this->request->getPost('description_id'),
                'description_en' => $this->request->getPost('description_en'),
            ]);

            return redirect()->to('/admin/vip')->with('success', 'VIP Data created successfully.');
        }

        return view('pages/admin/vip/create');
    }

    public function edit($id)
    {
        $data['vip'] = $this->VIPModel->find($id);
        return view('pages/admin/vip/edit', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'post') {
            // Validate the request data
            $validationRules = [
                'title_id' => 'required|min_length[3]',
                'title_en' => 'required|min_length[3]',
                'description_id' => 'required',
                'description_en' => 'required',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Update the data in the database
            $this->VIPModel->update($id, [
                'title_id'       => $this->request->getPost('title_id'),
                'title_en'       => $this->request->getPost('title_en'),
                'description_id' => $this->request->getPost('description_id'),
                'description_en' => $this->request->getPost('description_en'),
            ]);

            return redirect()->to('/admin/vip')->with('success', 'VIP Data updated successfully.');
        }

        // Show the edit form
        $data['vip'] = $this->VIPModel->find($id);
        return view('pages/admin/vip/edit', $data);
    }

    public function delete($id)
    {

        $this->VIPModel->delete($id);

        return redirect()->to('/admin/vip')->with('success', 'VIP Dropdown deleted successfully.');
    }


    // Edit method for service
    public function editService($id)
    {
        // Fetch the service data to be edited
        $data['service'] = $this->ServicesModel->find($id);

        // If service not found, redirect
        if (!$data['service']) {
            return redirect()->to('/admin/vip')->with('error', 'Service not found.');
        }

        // Load the edit view
        return view('pages/admin/vip/edit_service', $data);
    }

    // Update method for service
    public function updateService($id)
    {
        // Handle the service update form submission
        if ($this->request->getMethod() === 'post') {
            // Validation rules for the service
            $validationRules = [
                'seo_tag_title_id' => 'required|min_length[3]',
                'seo_tag_title_en' => 'required|min_length[3]',
                'desc_id' => 'required',
                'desc_en' => 'required',
            ];

            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Update the service data in the database
            $this->ServicesModel->update($id, [
                'seo_tag_title_id' => $this->request->getPost('seo_tag_title_id'),
                'seo_tag_title_en' => $this->request->getPost('seo_tag_title_en'),
                'title_id' => $this->request->getPost('title_id'),
                'title_en' => $this->request->getPost('title_en'),
                'desc_id' => $this->request->getPost('desc_id'),
                'desc_en' => $this->request->getPost('desc_en'),
            ]);

            return redirect()->to('/admin/vip')->with('success', 'VIP Services updated successfully.');
        }

        // If it's not a POST request, show the service edit form
        $data['service'] = $this->ServicesModel->find($id);
        return view('pages/admin/vip/edit_service', $data);
    }
}
