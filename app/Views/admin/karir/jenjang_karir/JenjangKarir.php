<?php

namespace App\Controllers;

use App\Models\JenjangKarirModel;

class JenjangKarir extends BaseController
{
    protected $jenjangKarirModel;
    public function __construct()
    {
        $this->jenjangKarirModel = new JenjangKarirModel();
    }
    public function view()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $jenjang_karir = $this->jenjangKarirModel->findAll();

                $data = [
                    'judul' => 'Jenjang Karir Page Data | Admin',
                    'title' => 'Jenjang Karir Page',
                    'jenjang_karir' => $jenjang_karir
                    // 'karir' => $this->karirModel->getKarir()
                ];

                return view('admin/karir/jenjang_karir/data_jenjang_karir', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function add()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $data = [
                    'judul' => 'Jenjang Karir Page Data | Admin',
                    'title' => 'Add Jenjang Karir',
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/karir/jenjang_karir/add_jenjang_karir', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function edit($id)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $jenjang_karir = $this->jenjangKarirModel->where(['id' => $id])->first();
                $data = [
                    'judul' => 'Jenjang Karir Page Data | Admin',
                    'title' => 'Update Jenjang Karir',
                    'jenjang_karir' => $jenjang_karir,
                    'validation' => \Config\Services::validation()
                    // 'karir' => $this->karirModel->getKarir($id)
                ];
                return view('admin/karir/jenjang_karir/update_jenjang_karir', $data);
            } else {
                $data = [
                    'tipe_admin' => session()->get('tipe_admin'),
                    'nama'     => session()->get('nama'),
                    'email'     => session()->get('email'),
                    'password'     => session()->get('password'),
                    'foto'     => session()->get('foto'),
                ];
                return redirect()->to('/admin');
            }
        } else {
            return redirect()->to('/login');
        }
    }
    public function save()
    {
        if (!$this->validate([
            'jenjang_karir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenjang Karir harus diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/add_jenjang_karir')->withInput()->with('validation', $validation);
        }

        $this->jenjangKarirModel->save([
            'karir' => $this->request->getVar('jenjang_karir'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_jenjang_karir');
    }

    public function delete($id)
    {
        $this->jenjangKarirModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/data_jenjang_karir');
    }

    public function update($id)
    {
        if (!$this->validate([
            'jenjang_karir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenjang Karir harus diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/update_jenjang_karir/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);
        }
        $this->jenjangKarirModel->save([
            'id' => $id,
            'karir' => $this->request->getVar('jenjang_karir'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_jenjang_karir');
    }
}
