<?php

namespace App\Controllers;

use App\Models\AyatModel;
use App\Models\PasalModel;

class Ayat extends BaseController
{
    protected $ayatModel;
    protected $pasalModel;
    public function __construct()
    {
        $this->ayatModel = new AyatModel();
        $this->pasalModel = new PasalModel();
    }
    public function index()
    {
        if (session()->get('logged_in')) {
            $pasal = $this->pasalModel;
            $ayat = $this->ayatModel->findAll();
            $data = [
                'judul' => 'Ayat Page Data | Admin',
                'title' => 'Ayat Page',
                'ayat' => $ayat,
                'pasal' => $pasal,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/aturan/v_add_ayat', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function UpdateAyat($id)
    {
        if (session()->get('logged_in')) {
            $ayat = $this->ayatModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Ayat Page Data | Admin',
                'title' => 'Update Ayat',
                'ayat' => $ayat,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/aturan/v_update_ayat', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {
        if (!$this->validate([
            'pasal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pasal harus diisi'
                ]
            ],
            'judul_ayat' => [
                'rules' => 'required|is_unique[ayat.judul_ayat]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul ayat sudah ada'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/data_ayat')->withInput();
        }

        $this->ayatModel->save([
            'pasal' => $this->request->getVar('pasal'),
            'judul_ayat' => $this->request->getVar('judul_ayat'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->getFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/data_ayat');
    }

    public function update($id)
    {
        $data_ayat = $this->ayatModel->find($id);
        if ($data_ayat['judul_ayat'] == $this->request->getVar('judul_ayat')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[ayat.judul_ayat]';
        }
        if (!$this->validate([
            'pasal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pasal harus diisi'
                ]
            ],
            'judul_ayat' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul ayat sudah ada'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
        ])) {
            return redirect()->to('/update_ayat/' . $id)->withInput();
        }

        $this->ayatModel->save([
            'id' => $id,
            'pasal' => $this->request->getVar('pasal'),
            'judul_ayat' => $this->request->getVar('judul_ayat'),
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->getFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/data_ayat');
    }

    public function delete($id)
    {
        $this->ayatModel->delete($id);
        session()->getFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/data_ayat');
    }
}
