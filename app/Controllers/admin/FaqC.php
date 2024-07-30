<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FAQCategoryModel;

class FaqC extends BaseController
{
    protected $faqCategoryModel;

    public function __construct()
    {
        $this->faqCategoryModel = new FAQCategoryModel();
    }

    public function index()
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $faqcategory_model = new FAQCategoryModel();
        $all_data_faqcategory = $faqcategory_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/faqC/index', [
            'all_data_faqcategory' => $all_data_faqcategory,
            'validation' => $validation
        ]);
    }

    public function tambah()
{
    
    $faqcategory_model = new FAQCategoryModel();
    $all_data_faqcategory = $faqcategory_model->findAll();
    $validation = \Config\Services::validation();
    return view('pages/faqC/tambah', [
        'all_data_faqcategory' => $all_data_faqcategory,
        'validation' => $validation,
        'name_id' => '', 
        'name_en' => '', 
    ]);
}

public function proses_tambah()
{
    // Set default timezone
    date_default_timezone_set('Asia/Jakarta');

    // Retrieve file and form data
    $name_id = $this->request->getVar("name_id");
    $name_en = $this->request->getVar("name_en");
    
   
        $faqcategory_model = new FAQCategoryModel();
        $data = [
            'name_id' => $name_id,
            'name_en' => $name_en,
        ];
        $faqcategory_model->save($data);

        // Redirect with success message
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('/faqC/index'));
}



public function edit($id_faq_category)
{
    $faqCategoryModel = new FAQCategoryModel();
    $faqCategoryData = $faqCategoryModel->find($id_faq_category);

    if (!$faqCategoryData) {
        return redirect()->back()->with('error', 'FAQ Category not found');
    }
    return view('pages/faqC/edit', ['faqCategoryData' => $faqCategoryData]);

}


public function proses_edit($id_faq_category = null)
{
    if (!is_numeric($id_faq_category)) {
            return redirect()->back()->with('error', 'Invalid ID');
        }

        $faqCategoryModel = new FAQCategoryModel();

        $name_id = $this->request->getPost("name_id");
        $name_en = $this->request->getPost("name_en");

        // Validasi input
        $validationRules = [
            'name_id' => 'required',
            'name_en' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        try {
            $faqCategoryModel->update($id_faq_category, [
                'name_id' => $name_id,
                'name_en' => $name_en
            ]);

            return redirect()->to(base_url('/faqC/index'))->with('success', 'FAQ Category sukses di update');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Gagal untuk mengupdate FAQ Category: ' . $e->getMessage());
        }
}


public function delete($id_faq_category = null)
{
    if (!$id_faq_category) {
        return redirect()->back();
    }

    $faqcModel = new FAQCategoryModel();
    $faqcData = $faqcModel->find($id_faq_category);

    if (!$faqcData) {
        session()->setFlashdata('error', 'Data FAQ Category tidak ditemukan.');
        return redirect()->back();
    }

    // Delete the FAQ from the database
    $faqcModel->delete($id_faq_category);

    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('/faqC/index'));
}


}


