<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\DetailCorporateAgentModel;

class DetailCorporateAgentctrl extends BaseController
{
    public function index()
    {      
        $detail_corporate_agent_model = new DetailCorporateAgentModel();
        $all_data_detail_corporate_agent = $detail_corporate_agent_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/detail_corporate_agent',[
            'all_data_detail_corporate_agent' => $all_data_detail_corporate_agent,
            'validation' => $validation
        ]);
      
    }
    
    public function tambah()
    {
        
        $detail_corporate_agent_model = new DetailCorporateAgentModel();
        $all_data_detail_corporate_agent = $detail_corporate_agent_model->findAll();
        $validation = \Config\Services::validation();
        return view('pages/admin/tambahdetail_corporate_agent', [
            'all_data_detail_corporate_agent' => $all_data_detail_corporate_agent,
            'validation' => $validation,
            'title_id' => '', // Set parameter dengan nilai default kosong
            'title_en' => '', // Set parameter dengan nilai default kosong
            'description_id' => '', // Set parameter dengan nilai default kosong
            'description_en' => '', // Set parameter dengan nilai default kosong
             // Set parameter dengan nilai default kosong
            'image' => '' // Set parameter dengan nilai default kosong
            // Set parameter dengan nilai default kosong

    
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
        $image = $this->request->getFile("image");
    
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
            $image->move(FCPATH . 'assets/images/detail_corporate_agent/', $newFileName);
    
            $detail_corporate_agent_model = new DetailCorporateAgentModel();
            $data = [
                'title_id' => $title_id,
                'title_en' => $title_en,
                'description_id' => $description_id,
                'description_en' => $description_en,
                'image' => $newFileName

            ];
            $detail_corporate_agent_model->save($data);
    
            // Redirect with success message
            session()->setFlashdata('success', 'Data berhasil disimpan');
            return redirect()->to(base_url('/detail_corporate_agent'));
        }
    }
    
    
    
    public function edit($id)
    {
        // Pengecekan apakah pengguna sudah login atau belum
        $detail_corporate_agent_model = new DetailCorporateAgentModel();
        $all_data_detail_corporate_agent =  $detail_corporate_agent_model->find($id);
        $validation = \Config\Services::validation();
    
        return view('pages/admin/editdetail_corporate_agent', [
            'all_data_detail_corporate_agent' =>$all_data_detail_corporate_agent,
            'validation' => $validation
        ]);
    }
    
    public function proses_edit($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $detail_corporate_agent_model = new DetailCorporateAgentModel();
        $Data = $detail_corporate_agent_model->find($id);
    
        // Periksa apakah data ditemukan
        if (!$Data) {
            // Tangani kasus di mana tidak ada data yang ditemukan untuk ID yang diberikan
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to(base_url('/detail_corporate_agent'));
        }
    
        // Periksa apakah file baru 'foto_penulis' diunggah
        if ($this->request->getFile('image')->isValid()) {
            // Hapus file 'foto_penulis' lama setelah memperbarui data di database
            $image = $this->request->getFile('image');
            $fotoName = $image->getRandomName();
            $image->move('assets/images/detail_corporate_agent/', $fotoName);
    
            // Perbarui bidang 'foto_penulis' di database dengan klausa "where"
            $detail_corporate_agent_model->where('id', $id)->set([
                'image' => $fotoName,
                'title_id' => $this->request->getVar("title_id"),
                'title_en' => $this->request->getVar("title_en"),
                'description_id'=> $this->request->getVar("description_id"),
                'description_en'=> $this->request->getVar("description_en"),
            ])->update();
        } else {
            // Jika tidak ada file baru 'foto_penulis' yang diunggah, perbarui hanya bidang lainnya
            $detail_corporate_agent_model->where('id', $id)->set([
                'title_id' => $this->request->getVar("title_id"),
                'title_en' => $this->request->getVar("title_en"),
                'description_id'=> $this->request->getVar("description_id"),
                'description_en'=> $this->request->getVar("description_en"),
            ])->update();
    
          
          
        }
    
        session()->setFlashdata('success', 'Berkas berhasil diperbarui');
        return redirect()->to(base_url('/detail_corporate_agent'));
    }
        
    public function delete($id = null)
    {
        if (!$id) {
            return redirect()->back();
        }
    
        $detail_corporate_agent_model = new DetailCorporateAgentModel();
        $all_data_detail_corporate_agent =  $detail_corporate_agent_model->find($id);
    
        if (!$all_data_detail_corporate_agent) {
            session()->setFlashdata('error', 'Data Testimonial tidak ditemukan.');
            return redirect()->back();
        }
    
        // Delete the FAQ from the database
         $detail_corporate_agent_model->delete($id);
    
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('/detail_corporate_agent'));
    }
    
    
    
    }

   

