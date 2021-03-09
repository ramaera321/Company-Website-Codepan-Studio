<?php

namespace App\Controllers;

use App\Models\KarirModel;

class Karir extends BaseController
{
    protected $karirModel;
    public function __construct()
    {
        $this->karirModel = new KarirModel();
    }
    public function KarirPost()
    {
        if (session()->get('logged_in')) {
            $karir = $this->karirModel->findAll();

            $data = [
                'judul' => 'Karir Page Data | Admin',
                'title' => 'Karir Page',
                'karir' => $karir
                // 'karir' => $this->karirModel->getKarir()
            ];


            return view('admin/karir/v_data_karir', $data);
        } else {
            return redirect()->to('/login');
        }
    }
    public function AddKarir()
    {
        if (session()->get('logged_in')) {
            $db = \Config\Database::connect();
            $tb_cabang = $db->table('cabang');
            $query = $tb_cabang->get();
            $data = [
                'judul' => 'Karir Page Data | Admin',
                'title' => 'Add Karir',
                'cabang' => $query,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/karir/v_add_karir', $data);
        } else {
            return redirect()->to('/login');
        }
    }
    public function UpdateKarir($id)
    {
        if (session()->get('logged_in')) {
            $db = \Config\Database::connect();
            $tb_cabang = $db->table('cabang');
            $query = $tb_cabang->get();
            $karir = $this->karirModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Karir Page Data | Admin',
                'title' => 'Update Karir',
                'karir' => $karir,
                'cabang' => $query,
                'validation' => \Config\Services::validation()
                // 'karir' => $this->karirModel->getKarir($id)
            ];
            return view('admin/karir/v_update_karir', $data);
        } else {
            return redirect()->to('/login');
        }
    }
    public function save()
    {
        if (!$this->validate([
            'nama_karir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Karir harus diisi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Lokasi harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus dii si'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/add_karir')->withInput()->with('validation', $validation);
        }

        $this->karirModel->save([
            'nama_karir' => $this->request->getVar('nama_karir'),
            'lokasi' => $this->request->getVar('lokasi'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_karir');
    }

    public function delete($id)
    {
        $this->karirModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/data_karir');
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama_karir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Karir harus diisi'
                ]
            ],
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Lokasi harus diisi'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/update_karir/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }
        $this->karirModel->save([
            'id' => $id,
            'nama_karir' => $this->request->getVar('nama_karir'),
            'lokasi' => $this->request->getVar('lokasi'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_karir');
    }
}
