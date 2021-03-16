<?php

namespace App\Controllers;

use App\Models\CabangModel;

class Cabang extends BaseController
{
    protected $cabangModel;
    public function __construct()
    {
        $this->cabangModel = new CabangModel();
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $cabang = $this->cabangModel->findAll();
                $data = [
                    'judul' => 'Add New Kantor Cabang',
                    'title' => 'Add Kantor Cabang',
                    'cabang' => $cabang,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/cabang/v_add_cabang', $data);
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

    public function updatePage($id)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $cabang = $this->cabangModel->where(['id' => $id])->first();
                $data = [
                    'judul' => 'Update Kantor Cabang',
                    'title' => 'Kantor Cabang',
                    'cabang' => $cabang,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/cabang/v_update_cabang', $data);
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
            'nama' => [
                'rules' => 'required|is_unique[cabang.nama]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/cabang/post')->withInput();
        }

        $this->cabangModel->save([
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_cabang');
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[cabang.nama]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/update_cabang/' . $this->request->getVar('id'))->withInput();
        }

        $this->cabangModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_cabang');
    }

    public function delete($id)
    {
        $this->cabangModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/data_cabang');
    }
}
