<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\SocialMediaModel;

class SosialMediactrl extends BaseController
{
    public function index()
    {      
        $SosialMedia_model = new SocialMediaModel();
        $all_data_SosialMedia = $SosialMedia_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/SosialMedia',[
            'all_data_SosialMedia' => $all_data_SosialMedia,
            'validation' => $validation
        ]);
      
    }
    
    public function tambah()
    {
        
        $SosialMedia_model = new SocialMediaModel();
        $all_data_SosialMedia = $SosialMedia_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/tambahSosialMedia', [
            'all_data_SosialMedia' => $all_data_SosialMedia,
            'validation' => $validation,
            'title' => '', // Set parameter dengan nilai default kosong
            'image' => '', // Set parameter dengan nilai default kosong
            'link' => '', // Set parameter dengan nilai default kosong
        ]);
    }
    
    public function proses_tambah()
    {
        // Set default timezone
        date_default_timezone_set('Asia/Jakarta');
    
        // Retrieve form data
        $title = $this->request->getVar("title");
        $image = $this->request->getFile("image");
        $link = $this->request->getVar("link");
    
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
            $image->move(FCPATH . 'assets/images/social_media/', $newFileName);
    
            $SosialMedia_model = new SocialMediaModel();
            $data = [
                'title' => $title,
                'image' => $newFileName,
                'link' => $link
            ];
            $SosialMedia_model->save($data);
    
            // Redirect with success message
            session()->setFlashdata('success', 'Data berhasil disimpan');
            return redirect()->to(base_url('/SosialMedia'));
        }
    }
    
    
    
    public function edit($id)
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $SosialMedia_model = new SocialMediaModel();
        $all_data_SosialMedia =  $SosialMedia_model->find($id);
        $validation = \Config\Services::validation();
    
        return view('pages/admin/editSosialMedia', [
            'all_data_SosialMedia' =>$all_data_SosialMedia,
            'validation' => $validation
        ]);
    }
    
    public function proses_edit($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $SosialMedia_model = new SocialMediaModel();
        $Data = $SosialMedia_model->find($id);
    
        // Periksa apakah data ditemukan
        if (!$Data) {
            // Tangani kasus di mana tidak ada data yang ditemukan untuk ID yang diberikan
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to(base_url('/SosialMedia'));
        }
    
        // Periksa apakah file baru 'foto_penulis' diunggah
        if ($this->request->getFile('image')->isValid()) {
            // Hapus file 'foto_penulis' lama setelah memperbarui data di database
            $image = $this->request->getFile('image');
            $fotoName = $image->getRandomName();
            $image->move('assets/images/social_media/', $fotoName);
    
            // Perbarui bidang 'foto_penulis' di database dengan klausa "where"
            $SosialMedia_model->where('id', $id)->set([
                'image' => $fotoName,
                'title' => $this->request->getVar("title"),
                'link' => $this->request->getVar("link"),
                
                
            ])->update();
        } else {
            // Jika tidak ada file baru 'foto_penulis' yang diunggah, perbarui hanya bidang lainnya
            $SosialMedia_model->where('id', $id)->set([
                'title' => $this->request->getVar("title"),
                'link' => $this->request->getVar("link"),
            ])->update();
          
        }
    
        session()->setFlashdata('success', 'Berkas berhasil diperbarui');
        return redirect()->to(base_url('/SosialMedia'));
    }
    
    // public function proses_edit($id = null)
    // {
    //     if (!$id) {
    //         return redirect()->back();
    //     }
    
    //     $SosialMedia_model = new SocialMediaModel();
    //     $all_data_SosialMedia = $SosialMedia_model->find($id);
    
    //     if (!$all_data_SosialMedia) {
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
    //         $image->move(FCPATH . 'assets/images/SosialMedia/', $newFileName);
    
    //         // Set new image file name in the data array
    //         $data['image'] = $newFileName;
    //     }
    
    //     // Update testimonial data in the database
    //     $SosialMedia_model->update($id, $data);
    
    //     session()->setFlashdata('success', 'Data berhasil diperbarui');
    //     return redirect()->to(base_url('/SosialMedia'));
    // }
    
    
    public function delete($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $SosialMedia_model = new SocialMediaModel();
        $all_data_SosialMedia =  $SosialMedia_model->find($id);
    
        if (!$all_data_SosialMedia) {
            session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
            return redirect()->back();
        }
    
        // Delete the FAQ from the database
         $SosialMedia_model->delete($id);
    
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/SosialMedia'));
    }
    
    
    
    }

   

