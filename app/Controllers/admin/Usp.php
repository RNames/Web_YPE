<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\USPModel;

class Usp extends BaseController
{
    public function index()
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $usp_model = new USPModel();
        $all_data_usp = $usp_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/usp/index', [
            'all_data_usp' => $all_data_usp,
            'validation' => $validation
        ]);
    }

    public function tambah()
{
    
    $usp_model = new USPModel();
    $all_data_usp = $usp_model->findAll();
    $validation = \Config\Services::validation();
    return view('pages/usp/tambah', [
        'all_data_usp' => $all_data_usp,
        'validation' => $validation,
        'title_id' => '', // Set parameter dengan nilai default kosong
        'title_en' => '', // Set parameter dengan nilai default kosong
        'description_id' => '', // Set parameter dengan nilai default kosong
        'description_en' => '', // Set parameter dengan nilai default kosong
        'slug' => '', // Set parameter dengan nilai default kosong
    ]);
}

public function proses_tambah()
{
    // Set default timezone
    date_default_timezone_set('Asia/Jakarta');

    // Retrieve form data
    $title_id = $this->request->getVar("title_id");
    $title_en = $this->request->getVar("title_en");
    $description_id = $this->request->getVar("description_id");
    $description_en = $this->request->getVar("description_en");
    $slug = $this->request->getVar("slug");

    $usp_model = new USPModel();
    $data = [
        'title_id' => $title_id,
        'title_en' => $title_en,
        'description_id' => $description_id,
        'description_en' => $description_en,
        'slug' => $slug
    ];
    $usp_model->save($data);

    // Redirect with success message
    session()->setFlashdata('success', 'Data berhasil disimpan');
    return redirect()->to(base_url('usp/index'));
}

public function edit($id)
{
    // Pengecekan apakah pengguna sudah login atau belum
    $usp_model = new USPModel();
    $uspData = $usp_model->find($id);
    $validation = \Config\Services::validation();

    return view('pages/usp/edit', [
        'uspData' => $uspData,
        'validation' => $validation
    ]);
}


public function proses_edit($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $usp_model = new USPModel();
    $testimonialData = $usp_model->find($id);

    if (!$testimonialData) {
        session()->setFlashdata('error', 'Data testimonial tidak ditemukan.');
        return redirect()->back();
    }

    // Retrieve form data
    $title_id = $this->request->getVar("title_id");
    $title_en = $this->request->getVar("title_en");
    $description_id = $this->request->getVar("description_id");
    $description_en = $this->request->getVar("description_en");
    $slug = $this->request->getVar("slug");

    // Update testimonial data
    $data = [
        'title_id' => $title_id,
        'title_en' => $title_en,
        'description_id' => $description_id,
        'description_en' => $description_en,
        'slug' => $slug
    ];

    
    // Update testimonial data in the database
    $usp_model->update($id, $data);

    session()->setFlashdata('success', 'Data berhasil diperbarui');
    return redirect()->to(base_url('usp/index'));
}


public function delete($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $testModel = new USPModel();
    $testData = $testModel->find($id);

    if (!$testData) {
        session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
        return redirect()->back();
    }

    // Delete the FAQ from the database
    $testModel->delete($id);

    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('usp/index'));
}


}