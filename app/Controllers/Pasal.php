<?php

namespace App\Controllers;

use App\Models\PasalModel;

class Pasal extends BaseController
{
    protected $pasalModel;
    public function __construct()
    {
        $this->pasalModel = new PasalModel();
    }
    public function index()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $pasal = $this->pasalModel->findAll();
                $data = [
                    'judul' => 'Pasal Page Data | Admin',
                    'title' => 'Pasal Page',
                    'pasal' => $pasal,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/aturan/v_add_aturan', $data);
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

    public function UpdatePasal($id)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $pasal = $this->pasalModel->where(['id' => $id])->first();
                $data = [
                    'judul' => 'Pasal Page Data | Admin',
                    'title' => 'Update pasal',
                    'pasal' => $pasal,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/aturan/v_update_aturan', $data);
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
            'pasal' => [
                'rules' => 'required|is_unique[pasal.pasal]',
                'errors' => [
                    'required' => 'Pasal harus diisi',
                    'is_unique' => 'Pasal sudah ada'
                ]
            ],
            'judul' => [
                'rules' => 'required|is_unique[pasal.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul Pasal sudah ada'
                ]
            ],
        ])) {
            return redirect()->to('/data_pasal')->withInput();
        }

        $this->pasalModel->save([
            'pasal' => $this->request->getVar('pasal'),
            'judul' => $this->request->getVar('judul')
        ]);

        session()->getFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/data_pasal');
    }

    public function update($id)
    {
        $data_pasal = $this->pasalModel->find($id);
        if ($data_pasal['pasal'] == $this->request->getVar('pasal')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[pasal.pasal]';
        }

        if ($data_pasal['judul'] == $this->request->getVar('judul')) {
            $rules1 = 'required';
        } else {
            $rules1 = 'required|is_unique[pasal.judul]';
        }
        if (!$this->validate([
            'pasal' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'Pasal harus diisi',
                    'is_unique' => 'Pasal sudah ada'
                ]
            ],
            'judul' => [
                'rules' => $rules1,
                'errors' => [
                    'required' => 'Judul harus diisi',
                    'is_unique' => 'Judul Pasal sudah ada'
                ]
            ],
        ])) {
            return redirect()->to('/update_pasal/' . $id)->withInput();
        }

        $this->pasalModel->save([
            'id' => $id,
            'pasal' => $this->request->getVar('pasal'),
            'judul' => $this->request->getVar('judul')
        ]);

        session()->getFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/data_pasal');
    }

    public function delete($id)
    {
        $this->pasalModel->delete($id);
        session()->getFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/data_pasal');
    }
}
