<?php

namespace App\Controllers\Admin;

use App\Models\DestinationEventModel;
use App\Models\ServicesModel;
use CodeIgniter\Controller;

class DestinationEventController extends Controller
{
    protected $destinationEventModel;
    protected $ServicesModel;

    public function __construct()
    {
        $this->destinationEventModel = new DestinationEventModel();
        $this->ServicesModel = new ServicesModel();
    }

    public function index()
    {
        $data['destinationEvents'] = $this->destinationEventModel->findAll();

        $data['destination_service'] = $this->ServicesModel->find(3);


        return view('pages/admin/destination_event/index', $data);
    }



    public function create()
    {
        return view('pages/admin/destination_event/create');
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
        $imageFile->move(ROOTPATH . 'public/assets/images/destination_event', $imageName);

        $this->destinationEventModel->insert([
            'title_id' => $this->request->getPost('title_id'),
            'title_en' => $this->request->getPost('title_en'),
            'desc_id'  => $this->request->getPost('desc_id'),
            'desc_en'  => $this->request->getPost('desc_en'),
            'image'    => $imageName,
        ]);

        return redirect()->to('/admin/destination-event')->with('success', 'Destination Event added successfully.');
    }

    public function edit($id)
    {
        $data['destinationEvent'] = $this->destinationEventModel->find($id);

        return view('pages/admin/destination_event/edit', $data);
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
            $imageFile->move(ROOTPATH . 'public/assets/images/destination_event', $imageName);
            $data['image'] = $imageName;
        }

        $this->destinationEventModel->update($id, $data);

        return redirect()->to('/admin/destination-event')->with('success', 'Destination Event updated successfully.');
    }

    public function delete($id)
    {
        $event = $this->destinationEventModel->find($id);
        if ($event && file_exists(ROOTPATH . 'public/assets/images/destination_event/' . $event['image'])) {
            unlink(ROOTPATH . 'public/assets/images/destination_event/' . $event['image']);
        }

        $this->destinationEventModel->delete($id);

        return redirect()->to('/admin/destination-event')->with('success', 'Destination Event deleted successfully.');
    }

     // Edit method for service
     public function editService($id)
     {
         // Fetch the service data to be edited
         $data['destination_service'] = $this->ServicesModel->find($id);
 
         // If service not found, redirect
         if (!$data['destination_service']) {
             return redirect()->to('/admin/destination-event')->with('error', 'Service not found.');
         }
 
         // Load the edit view
         return view('pages/admin/destination_event/edit_service', $data);
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
 
             return redirect()->to('/admin/destination-event')->with('success', 'Destination Services updated successfully.');
         }
 
         // If it's not a POST request, show the service edit form
         $data['destination_service'] = $this->ServicesModel->find($id);
         return view('pages/admin/destination_event/edit_service', $data);
     }
}
