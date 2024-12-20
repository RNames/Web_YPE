<?php

namespace App\Controllers\Admin;

use App\Models\TourAgentModelModel;
use App\Models\ServicesModel;
use App\Models\TourAgentModel;
use CodeIgniter\Controller;

class TourAgentController extends Controller
{
    protected $tourAgentModel;
    protected $ServicesModel;

    public function __construct()
    {
        $this->tourAgentModel = new TourAgentModel();
        $this->ServicesModel = new ServicesModel();
    }

    public function index()
    {
        $data['tourAgent'] = $this->tourAgentModel->findAll();

        $data['tour_service'] = $this->ServicesModel->find(4);


        return view('pages/admin/tour_agent/index', $data);
    }



    public function create()
    {
        return view('pages/admin/tour_agent/create');
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
        $imageFile->move(ROOTPATH . 'public/assets/images/tour_agent', $imageName);

        $this->tourAgentModel->insert([
            'title_id' => $this->request->getPost('title_id'),
            'title_en' => $this->request->getPost('title_en'),
            'desc_id'  => $this->request->getPost('desc_id'),
            'desc_en'  => $this->request->getPost('desc_en'),
            'image'    => $imageName,
        ]);

        return redirect()->to('/admin/tour-agent')->with('success', 'Tour Agent successfully.');
    }

    public function edit($id)
    {
        $data['tourAgent'] = $this->tourAgentModel->find($id);

        return view('pages/admin/tour_agent/edit', $data);
    }

    public function update($id)
    {
        $validationRules = [
            'title_id' => 'required|min_length[3]',
            'title_en' => 'required|min_length[3]',
            'desc_id'  => 'required',
            'desc_en'  => 'required',
            'image'    => 'if_exist|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'title_id' => $this->request->getPost('title_id'),
            'title_en' => $this->request->getPost('title_en'),
            'desc_id'  => $this->request->getPost('desc_id'),
            'desc_en'  => $this->request->getPost('desc_en'),
        ];

        if ($this->request->getFile('image')->isValid()) {
            $imageFile = $this->request->getFile('image');
            $imageName = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . 'public/assets/images/tour_agent', $imageName);
            $data['image'] = $imageName;
        }

        $this->tourAgentModel->update($id, $data);

        return redirect()->to('/admin/tour-agent')->with('success', 'Data updated successfully.');
    }

    public function delete($id)
    {
        $event = $this->tourAgentModel->find($id);
        if ($event && file_exists(ROOTPATH . 'public/assets/images/tour_agent/' . $event['image'])) {
            unlink(ROOTPATH . 'public/assets/images/tour_agent/' . $event['image']);
        }

        $this->tourAgentModel->delete($id);

        return redirect()->to('/admin/tour-agent')->with('success', 'Data deleted successfully.');
    }

     // Edit method for service
     public function editService($id)
     {
         // Fetch the service data to be edited
         $data['tour_service'] = $this->ServicesModel->find($id);
 
         // If service not found, redirect
         if (!$data['tour_service']) {
             return redirect()->to('/admin/tour-agent')->with('error', 'Service not found.');
         }
 
         // Load the edit view
         return view('pages/admin/tour_agent/edit_service', $data);
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
 
             return redirect()->to('/admin/tour-agent')->with('success', 'Tour Agent list updated successfully.');
         }
 
         // If it's not a POST request, show the service edit form
         $data['tour_service'] = $this->ServicesModel->find($id);
         return view('pages/admin/tour_agent/edit_service', $data);
     }
}
