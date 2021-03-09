<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    protected $pemesananModel;
    public function __construct()
    {
        $this->pemesananModel = new PemesananModel();
    }

    public function index()
    {
        if (session()->get('logged_in')) {
            $data = [
                'validation' => \Config\Services::validation()
            ];
            return view('/', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'no' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'nama_perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'layanan_it' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'jumlah_orang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
            'bidang_perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi'
                ]
            ],
        ])) {

            return redirect()->to('')->withInput();
        }

        $this->pemesananModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'no' => $this->request->getVar('no'),
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'layanan_it' => $this->request->getVar('layanan_it'),
            'jumlah_orang' => $this->request->getVar('jumlah_orang'),
            'bidang_perusahaan' => $this->request->getVar('bidang_perusahaan'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->pemesananModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/');
    }
}
