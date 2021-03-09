<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $kategori = $this->kategoriModel->findAll();
            $data = [
                'judul' => 'Add New Kategori',
                'title' => 'Add Kategori',
                'kategori' => $kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_add_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($id)
    {
        if (session()->get('logged_in')) {
            $kategori = $this->kategoriModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Update Kategori',
                'title' => 'Kategori',
                'kategori' => $kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_update_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required|is_unique[kategori.nama_kategori]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/data_kategori')->withInput();
        }

        $this->kategoriModel->save([
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_kategori');
    }

    public function update($id)
    {
        $kategori = $this->kategoriModel->find($id);
        if ($kategori['nama_kategori'] == $this->request->getVar('nama_kategori')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[kategori.nama_kategori]';
        }
        if (!$this->validate([
            'nama_kategori' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/update_kategori/' . $this->request->getVar('id'))->withInput();
        }

        $this->kategoriModel->save([
            'id' => $id,
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_kategori');
    }

    public function delete($id)
    {
        $this->kategoriModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/data_kategori');
    }
}
