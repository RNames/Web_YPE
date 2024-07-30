<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\ArticleModel;

class Articlectrl extends BaseController
{
    public function index()
    {      
        $Article_model = new ArticleModel();
        $all_data_Article = $Article_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/Article',[
            'all_data_Article' => $all_data_Article,
            'validation' => $validation
        ]);
      
    }
    
    public function tambah()
    {
        
        $Article_model = new ArticleModel();
        $all_data_Article = $Article_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/tambahArticle', [
            'all_data_Article' => $all_data_Article,
            'validation' => $validation,
            'seo_tag_title_id'=>'',
            'seo_tag_title_en'=>'',
            'seo_description_id'=>'',
            'seo_description_en'=>'',
            'cover_image'=>'',
            'destination_id'=>'',
            'alt_image'=>'',
            'title_id' => '', // Set parameter dengan nilai default kosong
            'title_en' => '', // Set parameter dengan nilai default kosong
            'description_id' => '', // Set parameter dengan nilai default kosong
            'description_en' => '', // Set parameter dengan nilai default kosong
            'slug'=>'',
            'date'=>'',
            'writer'=>'',


    
        ]);
    }
    
    public function proses_tambah()
    {
        // Set default timezone
        date_default_timezone_set('Asia/Jakarta');
    
        // Retrieve form data
        $seo_tag_title_id=$this->request->getVar("seo_tag_title_id");
        $seo_tag_title_en=$this->request->getVar("seo_tag_title_en");
        $seo_description_id=$this->request->getVar("seo_description_id");
        $seo_description_en=$this->request->getVar("seo_description_en");
        $image = $this->request->getFile("image");
        $alt_image=$this->request->getVar("alt_image");
        $destination_id=$this->request->getVar("destination_id");
        $title_id = $this->request->getVar("title_id");
        $title_en = $this->request->getVar("title_en");
        $description_id = $this->request->getVar("description_id");
        $description_en = $this->request->getVar("description_en");          
        $slug=$this->request->getVar("slug");
        $date=$this->request->getVar("date");
        $writer=$this->request->getVar("writer");
       
    
        // Validate data
        if (!$this->validate([
            'image' => [
                'rules' => 'uploaded[image]|is_image[image]|max_size[image,5120]|mime_in[image,image/webp,image/svg+xml]',
                'errors' => [
                    'uploaded' => 'Pilih foto terlebih dahulu',
                    'is_image' => 'File yang anda pilih bukan gambar',
                    'max_size' => 'Maksimal ukuran file adalah 5MB',
                    'mime_in' => 'File yang anda pilih wajib berekstensikan webp atau svg'
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
            $image->move(FCPATH . 'assets/images/articles/', $newFileName);
    
            $Article_model = new ArticleModel();
            $data = [
                'seo_tag_title_id'=>$seo_tag_title_id,
                'seo_tag_title_en'=>$seo_tag_title_en,
                'seo_description_id'=>$seo_description_id,
                'seo_description_en'=>$seo_description_en,
                'title_id' => $title_id,
                'title_en' => $title_en,
                'description_id' => $description_id,
                'description_en' => $description_en,
                'cover_image' => $newFileName,
                'alt_image'=>$alt_image,
                'destination_id'=>$destination_id,
                'slug'=>$slug,
                'date'=>$date,
                'writer'=>$writer,

            ];
            $Article_model->save($data);
    
            // Redirect with success message
            session()->setFlashdata('success', 'Data berhasil disimpan');
            return redirect()->to(base_url('/Article'));
        }
    }
    
    
    
    public function edit($id)
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $Article_model = new ArticleModel();
        $all_data_Article =  $Article_model->find($id);
        $validation = \Config\Services::validation();
    
        return view('pages/admin/editArticle', [
            'all_data_Article' =>$all_data_Article,
            'validation' => $validation
        ]);
    }
    
    public function proses_edit($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $Article_model = new ArticleModel();
        $Data = $Article_model->find($id);
    
        // Periksa apakah data ditemukan
        if (!$Data) {
            // Tangani kasus di mana tidak ada data yang ditemukan untuk ID yang diberikan
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to(base_url('/Article'));
        }
    
        // Periksa apakah file baru 'foto_penulis' diunggah
        if ($this->request->getFile('cover_image')->isValid()) {
            // Hapus file 'foto_penulis' lama setelah memperbarui data di database
            $cover_image = $this->request->getFile('cover_image');
            $fotoName = $cover_image->getRandomName();
            $cover_image->move('assets/images/articles/', $fotoName);
    
            // Perbarui bidang 'foto_penulis' di database dengan klausa "where"
            $Article_model->where('id', $id)->set([
                'cover_image' => $fotoName,
                'seo_tag_title_id'=>$this->request->getVar("seo_tag_title_id"),
                'seo_tag_title_en'=>$this->request->getVar("seo_tag_title_en"),
                'seo_description_id'=>$this->request->getVar("seo_description_id"),
                'seo_description_en'=>$this->request->getVar("seo_description_en"),
                'alt_image'=>$this->request->getVar("alt_image"),
                'destination_id'=>$this->request->getVar("destination_id"),
                'title_id' => $this->request->getVar("title_id"),
                'title_en' => $this->request->getVar("title_en"),
                'description_id'=> $this->request->getVar("description_id"),
                'description_en'=> $this->request->getVar("description_en"),
                'slug'=>$this->request->getVar("slug"),
                'date'=>$this->request->getVar("date"),
                'writer'=>$this->request->getVar("writer")
            ])->update();
        } else {
            // Jika tidak ada file baru 'foto_penulis' yang diunggah, perbarui hanya bidang lainnya
            $Article_model->where('id', $id)->set([
                'seo_tag_title_id'=>$this->request->getVar("seo_tag_title_id"),
                'seo_tag_title_en'=>$this->request->getVar("seo_tag_title_en"),
                'seo_description_id'=>$this->request->getVar("seo_description_id"),
                'seo_description_en'=>$this->request->getVar("seo_description_en"),
                'alt_image'=>$this->request->getVar("alt_image"),
                'destination_id'=>$this->request->getVar("destination_id"),
                'title_id' => $this->request->getVar("title_id"),
                'title_en' => $this->request->getVar("title_en"),
                'description_id'=> $this->request->getVar("description_id"),
                'description_en'=> $this->request->getVar("description_en"),
                'slug'=>$this->request->getVar("slug"),
                'date'=>$this->request->getVar("date"),
                'writer'=>$this->request->getVar("writer")
            ])->update();
    
          
          
        }
    
        session()->setFlashdata('success', 'Berkas berhasil diperbarui');
        return redirect()->to(base_url('/Article'));
    }
        
    public function delete($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $Article_model = new ArticleModel();
        $all_data_Article =  $Article_model->find($id);
    
        if (!$all_data_Article) {
            session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
            return redirect()->back();
        }
    
        // Delete the FAQ from the database
         $Article_model->delete($id);
    
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/Article'));
    }
    
    
    
    }

   

