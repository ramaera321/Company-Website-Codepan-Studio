<?php

namespace App\Controllers;

use App\Models\PortfolioSubKategoriModel;

class PortfolioSub extends BaseController
{
    protected $portfolioSubKategoriModel;
    public function __construct()
    {
        $this->portfolioSubKategoriModel = new PortfolioSubKategoriModel();
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $portfolio_sub_kategori = $this->portfolioSubKategoriModel->findAll();
            $data = [
                'judul' => 'Add New Portfolio Sub Kategori',
                'title' => 'Add Sub Portfolio Kategori',
                'portfolio_sub_kategori' => $portfolio_sub_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_add_portfolio_sub_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($id)
    {
        if (session()->get('logged_in')) {
            $portfolio_sub_kategori = $this->portfolioSubKategoriModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Update Portfolio Sub Kategori',
                'title' => 'Portfolio Sub Kategori',
                'portfolio_sub_kategori' => $portfolio_sub_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_update_portfolio_sub_kategori', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'nama_sub' => [
                'rules' => 'required|is_unique[portfolio_sub_kategori.nama_sub]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/data_sub')->withInput();
        }

        $this->portfolioSubKategoriModel->save([
            'nama_sub' => $this->request->getVar('nama_sub')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_port_sub');
    }

    public function update($id)
    {
        $portfolio_sub_kategori = $this->portfolioSubKategoriModel->find($id);
        if ($portfolio_sub_kategori['nama_sub'] == $this->request->getVar('nama_sub')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[portfolio_sub_kategori.nama_sub]';
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

            return redirect()->to('/update_port_sub/' . $this->request->getVar('id'))->withInput();
        }

        $this->portfolioSubKategoriModel->save([
            'id' => $id,
            'nama_sub' => $this->request->getVar('nama_sub')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_port_sub');
    }

    public function delete($id)
    {
        $this->portfolioSubKategoriModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/data_port_sub');
    }
}
