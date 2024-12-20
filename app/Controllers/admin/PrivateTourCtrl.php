<?php

namespace App\Controllers\admin;

use App\Models\ServicesModel;
use CodeIgniter\Controller;

class PrivateTourCtrl extends Controller
{
    protected $ServicesModel;

    public function __construct()
    {
        $this->ServicesModel = new ServicesModel();
    }

    // List all private tours
    public function index()
    {
        // Fetch the second row (skip 1 row and limit to 1)
        $data['privateTours'] = $this->ServicesModel->findAll(1, 1); // Equivalent to LIMIT 1 OFFSET 1

        // Pass the data to the view
        return view('pages/admin/private_tour/index', $data);
    }



    // Show form to edit private tour
    public function edit($id)
    {
        $data['privateTour'] = $this->ServicesModel->find($id);
        return view('pages/admin/private_tour/edit', $data);
    }

    // Update the private tour
    public function update($id)
    {
        if ($this->request->getMethod() === 'post') {
            // Validate the form data
            $validationRules = [
                'seo_tag_title_id' => 'required',
                'seo_tag_title_en' => 'required',
                'title_id' => 'required',
                'title_en' => 'required',
                'desc_id' => 'required',
                'desc_en' => 'required',

            ];

            if (!$this->validate($validationRules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            // Update the data in the database
            $this->ServicesModel->update($id, [
                'seo_tag_title_id' => $this->request->getPost('seo_tag_title_id'),
                'seo_tag_title_en' => $this->request->getPost('seo_tag_title_en'),
                'title_id' => $this->request->getPost('title_id'),
                'title_en' => $this->request->getPost('title_en'),
                'desc_id' => $this->request->getPost('desc_id'),
                'desc_en' => $this->request->getPost('desc_en'),
            ]);

            return redirect()->to('/admin/private-tour')->with('success', 'Private tour updated successfully.');
        }

        $data['privateTour'] = $this->ServicesModel->find($id);
        return view('pages/admin/private_tour/edit', $data);
    }


}
