<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\ImageArticleModel;

class ImageArticlectrl extends BaseController
{
    public function index()
    {
        $image_articles_model = new ImageArticleModel();
        $all_data_image_articles = $image_articles_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/image_articles', [
            'all_data_image_articles' => $all_data_image_articles,
            'validation' => $validation
        ]);
    }

    public function tambah()
    {
        $articleModel = new \App\Models\ArticleModel();
        $data['articles'] = $articleModel->findAll();

        // Get validation service
        $validation = \Config\Services::validation();

        // Pass validation to the view
        return view('pages/admin/tambahimage_articles', [
            'articles' => $data['articles'],
            'validation' => $validation // Add validation variable here
        ]);
    }


    public function proses_tambah()
    {
        $image_articles_model = new ImageArticleModel();

        // Validate the request
        $validationRules = [
            'image' => [
                'rules' => 'uploaded[image]|is_image[image]|max_size[image,5120]',
                'errors' => [
                    'uploaded' => 'Gambar harus diunggah.',
                    'is_image' => 'File harus berupa gambar.',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 5 MB.'
                ]
            ],
            'slug' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Handle the uploaded image
        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move(FCPATH . 'assets/images/image_articles/', $imageName);

        // Save the data to the database
        $data = [
            'article_id' => $this->request->getPost('article_id'),
            'slug' => $this->request->getPost('slug'),
            'url' => $imageName // Save the image filename in the database
        ];

        $image_articles_model->save($data);

        // Redirect with success message
        session()->setFlashdata('success', 'Data berhasil disimpan');
        return redirect()->to(base_url('/image_articles'));
    }




    public function edit($id)
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $image_articles_model = new ImageArticleModel();
        $all_data_image_articles =  $image_articles_model->find($id);


        $articleModel = new \App\Models\ArticleModel();
        $data['articles'] = $articleModel->findAll();
        $data['image_article'] = $all_data_image_articles;

        return view('pages/admin/editimage_articles', $data);
    }

    public function proses_edit($id = null)
    {
        $image_articles_model = new ImageArticleModel();

        // Validate the request
        $validationRules = [
            'image' => [
                'rules' => 'is_image[image]|max_size[image,5120]',
                'errors' => [
                    'is_image' => 'File harus berupa gambar.',
                    'max_size' => 'Ukuran gambar tidak boleh lebih dari 5 MB.'
                ]
            ],
            'slug' => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        $data = [
            'article_id' => $this->request->getPost('article_id'),
            'slug' => $this->request->getPost('slug')
        ];

        // Handle the uploaded image
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'assets/images/image_articles/', $imageName);
            $data['url'] = $imageName; // Save the new image filename
        }

        // Update the database record
        $image_articles_model->update($id, $data);

        session()->setFlashdata('success', 'Data berhasil diperbarui');
        return redirect()->to(base_url('/image_articles'));
    }


    // public function proses_edit($id = null)
    // {
    //     if (!$id) {
    //         return redirect()->back();
    //     }

    //     $image_articles_model = new ImageArticleModel();
    //     $all_data_image_articles = $image_articles_model->find($id);

    //     if (!$all_data_image_articles) {
    //         session()->setFlashdata('error', 'Data testimonial tidak ditemukan.');
    //         return redirect()->back();
    //     }

    //     // Retrieve form data
    //     $title = $this->request->getVar("title");
    //     $image = $this->request->getFile("image");
    //     $link = $this->request->getVar("link");

    //     // Update testimonial data
    //     $data = [
    //         'title' => $title,
    //         'image' => $image,
    //         'link' => $link
    //     ];

    //     // Check if there's a new image uploaded
    //     if ($image->isValid() && !$image->hasMoved()) {
    //         // Validation passes, process the data
    //         $newFileName = $image->getRandomName();

    //         // Move uploaded file to the 'writable/uploads' directory
    //         $image->move(FCPATH . 'assets/images/image_articles/', $newFileName);

    //         // Set new image file name in the data array
    //         $data['image'] = $newFileName;
    //     }

    //     // Update testimonial data in the database
    //     $image_articles_model->update($id, $data);

    //     session()->setFlashdata('success', 'Data berhasil diperbarui');
    //     return redirect()->to(base_url('/image_articles'));
    // }


    public function delete($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }

        $image_articles_model = new ImageArticleModel();
        $all_data_image_articles =  $image_articles_model->find($id);

        if (!$all_data_image_articles) {
            session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
            return redirect()->back();
        }

        // Delete the FAQ from the database
        $image_articles_model->delete($id);

        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/image_articles'));
    }
}
