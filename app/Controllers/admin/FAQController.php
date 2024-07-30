<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\FAQModel;
use App\Models\DestinationModel;
use App\Models\FAQCategoryModel;

class FAQController extends BaseController
{
    protected $destinationModel;
    protected $faqModel;
    protected $faqCategoryModel;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
        $this->faqModel = new FAQModel();
        $this->faqCategoryModel = new FAQCategoryModel();
    }

    public function index()
    {
        $faqs = $this->faqModel->findAll();
        $faqCategories = $this->faqCategoryModel->findAll();

        // Gabungkan data FAQ dengan kategori terkait
        foreach ($faqs as &$faq) {
            foreach ($faqCategories as $category) {
                if ($faq['id_faq_category'] == $category['id_faq_category']) {
                    $faq['name_id'] = $category['name_id'];
                    $faq['name_en'] = $category['name_en'];
                    break;
                }
            }
        }

        $data['faq'] = $faqs;
        return view('pages/faq/index', $data);
    }

    public function tambah()
    {
        $data['faq_category'] = $this->faqCategoryModel->findAll();
        return view('pages/faq/tambah', $data);
    }

    public function proses_tambah()
    {
        $data = $this->request->getPost();
        $this->faqModel->insert($data);
        return redirect()->to('faq/index')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $faq = $this->faqModel->find($id);

        if ($faq !== null) {
            $data['faqData'] = $faq;
            $data['faq_category'] = $this->faqCategoryModel->findAll();
            return view('pages/faq/edit', $data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function proses_edit($id = null)
    {
        $data = $this->request->getPost();
        $this->faqModel->update($id, $data);
        return redirect()->to('/faq/index')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id = null)
    {
        $this->faqModel->delete($id);
        return redirect()->to('/faq/index')->with('success', 'Data Berhasil Dihapus');
    }
}


