<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\TestimonialModel;

class Testimonialctrl extends BaseController
{
    public function index()
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $test_model = new TestimonialModel();
        $all_data_test = $test_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/testimonial/index', [
            'all_data_test' => $all_data_test,
            'validation' => $validation
        ]);
    }

    public function tambah()
{
    
    $test_model = new TestimonialModel();
    $all_data_test = $test_model->findAll();
    $validation = \Config\Services::validation();
    return view('pages/testimonial/tambah', [
        'all_data_test' => $all_data_test,
        'validation' => $validation,
        'rating' => '', // Set parameter dengan nilai default kosong
        'name' => '', // Set parameter dengan nilai default kosong
        'description_id' => '', // Set parameter dengan nilai default kosong
        'description_en' => '', // Set parameter dengan nilai default kosong
        'image' => '', // Set parameter dengan nilai default kosong
        'alt_image' => '', // Set parameter dengan nilai default kosong
    ]);
}

public function proses_tambah()
{
    // Set default timezone
    date_default_timezone_set('Asia/Jakarta');

    // Retrieve form data
    $rating = $this->request->getVar("rating");
    $name = $this->request->getVar("name");
    $description_id = $this->request->getVar("description_id");
    $description_en = $this->request->getVar("description_en");
    $image = $this->request->getFile("image");
    $alt_image = $this->request->getVar("alt_image");

    // Validate data
    if (!$this->validate([
        'image' => [
            'rules' => 'uploaded[image]|is_image[image]|max_size[image,5120]|mime_in[image,image/webp,image/svg]',
            'errors' => [
                'uploaded' => 'Pilih foto terlebih dahulu',
                'is_image' => 'File yang anda pilih bukan gambar',
                'max_size' => 'Maksimal ukuran file adalah 5MB',
                'mime_in' => 'File yang anda pilih wajib berekstensikan webp/svg'
            ]
        ]
    ])) {
        // Validation fails
        session()->setFlashdata('error', $this->validator->listErrors());
        return redirect()->back()->withInput();
    } else {
        // Validation passes, process the data
        $newFileName = $image->getRandomName();

        // Move uploaded file to the 'writable/uploads' directory
        $image->move('assets/images/testimonials', $newFileName);

        $test_model = new TestimonialModel();
        $data = [
            'rating' => $rating,
            'name' => $name,
            'description_id' => $description_id,
            'description_en' => $description_en,
            'image' => $newFileName,
            'alt_image' => $alt_image
        ];
        $test_model->save($data);

        // Redirect with success message
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('testimonial/index'));
    }
}


public function edit($id)
{
    // Pengecekan apakah pengguna sudah login atau belum
    $test_model = new TestimonialModel();
    $testData = $test_model->find($id);
    $validation = \Config\Services::validation();

    return view('pages/testimonial/edit', [
        'testData' => $testData,
        'validation' => $validation
    ]);
}


public function proses_edit($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $test_model = new TestimonialModel();
    $testimonialData = $test_model->find($id);

    if (!$testimonialData) {
        session()->setFlashdata('error', 'Data testimonial tidak ditemukan.');
        return redirect()->back();
    }

    // Retrieve form data
    $rating = $this->request->getVar("rating");
    $name = $this->request->getVar("name");
    $description_id = $this->request->getVar("description_id");
    $description_en = $this->request->getVar("description_en");
    $image = $this->request->getFile("image");
    $alt_image = $this->request->getVar("alt_image");

    // Update testimonial data
    $data = [
        'rating' => $rating,
        'name' => $name,
        'description_id' => $description_id,
        'description_en' => $description_en,
        'alt_image' => $alt_image
    ];

    // Check if there's a new image uploaded
    if ($image->isValid() && !$image->hasMoved()) {
        // Validation passes, process the data
        $newFileName = $image->getRandomName();

        // Move uploaded file to the 'writable/uploads' directory
        $image->move('assets/images/testimonials', $newFileName);

        // Set new image file name in the data array
        $data['image'] = $newFileName;
    }

    // Update testimonial data in the database
    $test_model->update($id, $data);

    session()->setFlashdata('success', 'Data berhasil diperbarui');
    return redirect()->to(base_url('testimonial/index'));
}


public function delete($id = null)
{
    if (!$id) {
        return redirect()->back();
    }

    $testModel = new TestimonialModel();
    $testData = $testModel->find($id);

    if (!$testData) {
        session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
        return redirect()->back();
    }

    // Delete the FAQ from the database
    $testModel->delete($id);

    session()->setFlashdata('success', 'Data berhasil dihapus');
    return redirect()->to(base_url('testimonial/index'));
}


}