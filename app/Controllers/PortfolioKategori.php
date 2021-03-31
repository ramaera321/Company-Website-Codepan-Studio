<?php

namespace App\Controllers;

use App\Models\PortfolioKategoriModel;

class PortfolioKategori extends BaseController
{
    protected $portfolioKategoriModel;
    public function __construct()
    {
        $this->portfolioKategoriModel = new PortfolioKategoriModel();
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $port_kategori = $this->portfolioKategoriModel->findAll();
            $data = [
                'judul' => 'Add New Portfolio Kategori',
                'title' => 'Add Portfolio Kategori',
                'port_kategori' => $port_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_add_portfolio_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($id)
    {
        if (session()->get('logged_in')) {
            $port_kategori = $this->portfolioKategoriModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Update Portfolio Kategori',
                'title' => 'Portfolio Kategori',
                'port_kategori' => $port_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_update_portfolio_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required|is_unique[portfolio_kategori.nama_kategori]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/data_port_kategori')->withInput();
        }

        $this->portfolioKategoriModel->save([
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_port_kategori');
    }

    public function update($id)
    {
        $port_kategori = $this->portfolioKategoriModel->find($id);
        if ($port_kategori['nama_kategori'] == $this->request->getVar('nama_kategori')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[portfolio_kategori.nama_kategori]';
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

            return redirect()->to('/update_port_kategori/' . $this->request->getVar('id'))->withInput();
        }

        $this->portfolioKategoriModel->save([
            'id' => $id,
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_port_kategori');
    }

    public function delete($id)
    {
        $this->portfolioKategoriModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/data_port_kategori');
    }
}