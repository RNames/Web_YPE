<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HomepageModel;

class HomepageController extends BaseController
{
    protected $homepageModel;

    public function __construct()
    {
        $this->homepageModel = new HomepageModel();
    }

    // List all records
    public function index()
    {
        $data = [
            'homepages' => $this->homepageModel->findAll(),
        ];
        return view('pages/admin/homepage/index', $data);
    }

    // Edit a record
    public function edit($id)
    {
        $data = [
            'homepage' => $this->homepageModel->find($id),
        ];
        return view('pages/admin/homepage/edit', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'post') {
            $this->homepageModel->update($id, $this->request->getPost());
            return redirect()->to('/admin/homepage')->with('success', 'Homepage updated successfully.');
        }
    }
}
