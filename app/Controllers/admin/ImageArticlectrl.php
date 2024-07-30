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
        return view('pages/admin/image_articles',[
            'all_data_image_articles' => $all_data_image_articles,
            'validation' => $validation
        ]);
      
    }
    
    public function tambah()
    {
        
        $articleModel = new \App\Models\ArticleModel();
        $data['articles'] = $articleModel->findAll();

        return view('pages/admin/tambahimage_articles', $data);
    }
    
    public function proses_tambah()
    {
        // Set default timezone
    
            $image_articles_model = new ImageArticleModel();
            $data = [
                'article_id' => $this->request->getPost('article_id'),
                'slug' => $this->request->getPost('slug'),
                'url' => $this->request->getPost('url')
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
        $data['image_article'] =$all_data_image_articles;
    
        return view('pages/admin/editimage_articles', $data);
    }
    
    public function proses_edit($id = null)
    {
         $image_articles_model = new ImageArticleModel();

        $data = [
            'article_id' => $this->request->getPost('article_id'),
            'slug' => $this->request->getPost('slug'),
            'url' => $this->request->getPost('url')
        ];

         $image_articles_model->update($id, $data);

        return redirect()->to('/image_articles');
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

   

