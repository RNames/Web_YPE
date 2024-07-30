<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FounderSosmedModel;

class FounderSosmedctrl extends BaseController
{
    public function index()
    {      
        $FounderSosmed_model = new FounderSosmedModel();
        $all_data_FounderSosmed = $FounderSosmed_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/FounderSosmed',[
            'all_data_FounderSosmed' => $all_data_FounderSosmed,
            'validation' => $validation
        ]);
      
    }
    
    public function tambah()
    {
        
        $FounderSosmed_model = new FounderSosmedModel();
        $all_data_FounderSosmed = $FounderSosmed_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/tambahFounderSosmed', [
            'all_data_FounderSosmed' => $all_data_FounderSosmed,
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
            $image->move(FCPATH . 'assets/images/founder/', $newFileName);
    
            $FounderSosmed_model = new FounderSosmedModel();
            $data = [
                'title' => $title,
                'image' => $newFileName,
                'link' => $link
            ];
            $FounderSosmed_model->save($data);
    
            // Redirect with success message
            session()->setFlashdata('success', 'Data berhasil disimpan');
            return redirect()->to(base_url('/FounderSosmed'));
        }
    }
    
    
    
    public function edit($id)
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $FounderSosmed_model = new FounderSosmedModel();
        $all_data_FounderSosmed =  $FounderSosmed_model->find($id);
        $validation = \Config\Services::validation();
    
        return view('pages/admin/editFounderSosmed', [
            'all_data_FounderSosmed' =>$all_data_FounderSosmed,
            'validation' => $validation
        ]);
    }
    
    public function proses_edit($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $FounderSosmed_model = new FounderSosmedModel();
        $Data = $FounderSosmed_model->find($id);
    
        // Periksa apakah data ditemukan
        if (!$Data) {
            // Tangani kasus di mana tidak ada data yang ditemukan untuk ID yang diberikan
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to(base_url('/FounderSosmed'));
        }
    
        // Periksa apakah file baru 'foto_penulis' diunggah
        if ($this->request->getFile('image')->isValid()) {
            // Hapus file 'foto_penulis' lama setelah memperbarui data di database
            $image = $this->request->getFile('image');
            $fotoName = $image->getRandomName();
            $image->move('assets/images/founder/', $fotoName);
    
            // Perbarui bidang 'foto_penulis' di database dengan klausa "where"
            $FounderSosmed_model->where('id', $id)->set([
                'image' => $fotoName,
                'title' => $this->request->getVar("title"),
                'link' => $this->request->getVar("link"),
                
                
            ])->update();
        } else {
            // Jika tidak ada file baru 'foto_penulis' yang diunggah, perbarui hanya bidang lainnya
            $FounderSosmed_model->where('id', $id)->set([
                'title' => $this->request->getVar("title"),
                'link' => $this->request->getVar("link"),
            ])->update();
          
        }
    
        session()->setFlashdata('success', 'Berkas berhasil diperbarui');
        return redirect()->to(base_url('/FounderSosmed'));
    }
    
    // public function proses_edit($id = null)
    // {
    //     if (!$id) {
    //         return redirect()->back();
    //     }
    
    //     $FounderSosmed_model = new FounderSosmedModel();
    //     $all_data_FounderSosmed = $FounderSosmed_model->find($id);
    
    //     if (!$all_data_FounderSosmed) {
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
    //         $image->move(FCPATH . 'assets/images/FounderSosmed/', $newFileName);
    
    //         // Set new image file name in the data array
    //         $data['image'] = $newFileName;
    //     }
    
    //     // Update testimonial data in the database
    //     $FounderSosmed_model->update($id, $data);
    
    //     session()->setFlashdata('success', 'Data berhasil diperbarui');
    //     return redirect()->to(base_url('/FounderSosmed'));
    // }
    
    
    public function delete($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $FounderSosmed_model = new FounderSosmedModel();
        $all_data_FounderSosmed =  $FounderSosmed_model->find($id);
    
        if (!$all_data_FounderSosmed) {
            session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
            return redirect()->back();
        }
    
        // Delete the FAQ from the database
         $FounderSosmed_model->delete($id);
    
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/FounderSosmed'));
    }
    
    
    
    }

   

