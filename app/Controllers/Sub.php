<?php

namespace App\Controllers;

use App\Models\SubKategoriModel;

class Sub extends BaseController
{
    protected $subKategoriModel;
    public function __construct()
    {
        $this->subKategoriModel = new SubKategoriModel();
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $sub_kategori = $this->subKategoriModel->findAll();
            $data = [
                'judul' => 'Add New Sub Kategori',
                'title' => 'Add Sub Kategori',
                'sub_kategori' => $sub_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_add_sub_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($id)
    {
        if (session()->get('logged_in')) {
            $sub_kategori = $this->subKategoriModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Update Sub Kategori',
                'title' => 'Sub Kategori',
                'sub_kategori' => $sub_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_update_sub_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'nama_sub' => [
                'rules' => 'required|is_unique[sub_kategori.nama_sub]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/data_sub')->withInput();
        }

        $this->subKategoriModel->save([
            'nama_sub' => $this->request->getVar('nama_sub')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_sub');
    }

    public function update($id)
    {
        $sub_kategori = $this->subKategoriModel->find($id);
        if ($sub_kategori['nama_sub'] == $this->request->getVar('nama_sub')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[sub_kategori.nama_sub]';
        }

        if (!$this->validate([
            'nama_sub' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/update_sub/' . $this->request->getVar('id'))->withInput();
        }

        $this->subKategoriModel->save([
            'id' => $id,
            'nama_sub' => $this->request->getVar('nama_sub')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_sub');
    }

    public function delete($id)
    {
        $this->subKategoriModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/data_sub');
    }
}
