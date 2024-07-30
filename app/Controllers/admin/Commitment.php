<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\CommitmentModel;

class Commitment extends BaseController
{
    public function index()
    {      
        $commitment_model = new CommitmentModel();
        $all_data_commitment = $commitment_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/commitment',[
            'all_data_commitment' => $all_data_commitment,
            'validation' => $validation
        ]);
      
    }
    
    public function tambah()
    {
        
        $commitment_model = new CommitmentModel();
        $all_data_commitment = $commitment_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/tambahCommitment', [
            'all_data_commitment' => $all_data_commitment,
            'validation' => $validation,
            'title_id' => '', // Set parameter dengan nilai default kosong
            'title_en' => '', // Set parameter dengan nilai default kosong
            'slug' => '', // Set parameter dengan nilai default kosong
            'image' => '', // Set parameter dengan nilai default kosong
            'alt_image' => '', // Set parameter dengan nilai default kosong
        ]);
    }
    
    public function proses_tambah()
    {
        // Set default timezone
        date_default_timezone_set('Asia/Jakarta');
    
        // Retrieve form data
        $title_id = $this->request->getVar("title_id");
        $title_en = $this->request->getVar("title_en");
        $slug = $this->request->getVar("slug");
        $image = $this->request->getFile("image");
        $alt_image = $this->request->getVar("alt_image");
    
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
            $image->move(FCPATH . 'assets/images/commitments/', $newFileName);
    
            $commitment_model = new CommitmentModel();
            $data = [
                'title_id' => $title_id,
                'title_en' => $title_en,
                'slug' => $slug,
                'image' => $newFileName,
                'alt_image' => $alt_image
            ];
            $commitment_model->save($data);
    
            // Redirect with success message
            session()->setFlashdata('success', 'Data berhasil disimpan');
            return redirect()->to(base_url('/commitment'));
        }
    }
    
    
    
    public function edit($id)
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $commitment_model = new CommitmentModel();
        $all_data_commitment =  $commitment_model->find($id);
        $validation = \Config\Services::validation();
    
        return view('pages/admin/editCommitment', [
            'all_data_commitment' =>$all_data_commitment,
            'validation' => $validation
        ]);
    }
    
    public function proses_edit($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $commitment_model = new CommitmentModel();
        $Data = $commitment_model->find($id);
    
        // Periksa apakah data ditemukan
        if (!$Data) {
            // Tangani kasus di mana tidak ada data yang ditemukan untuk ID yang diberikan
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to(base_url('/commitment'));
        }
    
        // Periksa apakah file baru 'foto_penulis' diunggah
        if ($this->request->getFile('image')->isValid()) {
            // Hapus file 'foto_penulis' lama setelah memperbarui data di database
            $image = $this->request->getFile('image');
            $fotoName = $image->getRandomName();
            $image->move('assets/images/commitments/', $fotoName);
    
            // Perbarui bidang 'foto_penulis' di database dengan klausa "where"
            $commitment_model->where('id', $id)->set([
                'image' => $fotoName,
                'title_id' => $this->request->getVar("title_id"),
                'title_en' => $this->request->getVar("title_en"),
                'slug' => $this->request->getVar("slug"),
                'alt_image' => $this->request->getVar("alt_image")
            ])->update();
        } else {
            // Jika tidak ada file baru 'foto_penulis' yang diunggah, perbarui hanya bidang lainnya
            $commitment_model->where('id', $id)->set([
                'title_id' => $this->request->getVar("title_id"),
                'title_en' => $this->request->getVar("title_en"),
                'slug' => $this->request->getVar("slug"),
                'alt_image' => $this->request->getVar("alt_image")
            ])->update();
    
          
          
        }
    
        session()->setFlashdata('success', 'Berkas berhasil diperbarui');
        return redirect()->to(base_url('/commitment'));
    }
    
    

    // public function proses_edit($id = null)
    // {
    //     if (!$id) {
    //         return redirect()->back();
    //     }
    
    //     $commitment_model = new CommitmentModel();
    //     $all_data_commitment = $commitment_model->find($id);
    
    //     if (!$all_data_commitment) {
    //         session()->setFlashdata('error', 'Data testimonial tidak ditemukan.');
    //         return redirect()->back();
    //     }
    
    //     // Retrieve form data
        
    //     $title_id = $this->request->getVar("title_id");
    //     $title_en = $this->request->getVar("title_en");
    //     $slug = $this->request->getVar("slug");
    //     $image = $this->request->getFile("image");
    //     $alt_image = $this->request->getVar("alt_image");
    
    //     // Update testimonial data
    //     $data = [
    //        'title_id' => $title_id,
    //             'title_en' => $title_en,
    //             'slug' => $slug,
    //             'image' => $image,
    //             'alt_image' => $alt_image
    //     ];
    
    //     // Check if there's a new image uploaded
    //     if ($image->isValid() && !$image->hasMoved()) {
    //         // Validation passes, process the data
    //         $newFileName = $image->getRandomName();
    
    //         // Move uploaded file to the 'writable/uploads' directory
    //         $image->move(FCPATH . 'assets/images/commitments/', $newFileName);
    
    //         // Set new image file name in the data array
    //         $data['image'] = $newFileName;
    //     }
    
    //     // Update testimonial data in the database
    //     $commitment_model->update($id, $data);
    
    //     session()->setFlashdata('success', 'Data berhasil diperbarui');
    //     return redirect()->to(base_url('/commitment'));
    // }
    
    
    public function delete($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $commitment_model = new CommitmentModel();
        $all_data_commitment =  $commitment_model->find($id);
    
        if (!$all_data_commitment) {
            session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
            return redirect()->back();
        }
    
        // Delete the FAQ from the database
         $commitment_model->delete($id);
    
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/commitment'));
    }
    
    
    
    }

   

