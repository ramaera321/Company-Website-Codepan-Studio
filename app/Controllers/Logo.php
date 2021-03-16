<?php

namespace App\Controllers;

use App\Models\LogoModel;

class Logo extends BaseController
{
    protected $logoModel;
    public function __construct()
    {
        $this->logoModel = new LogoModel();
    }

    public function index()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $logo = $this->logoModel->findAll();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Home logo',
                    'logo' => $logo,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/logo/v_data_logo', $data);
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
        if (session()->get('logged_in')) {
        } else {
            return redirect()->to('/login');
        }
    }

    public function Updatelogo($id)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $logo = $this->logoModel->where(['id' => $id])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Update Logo',
                    'logo' => $logo,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/logo/v_update_logo', $data);
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
            'foto' => [
                'rules' => 'uploaded[foto]|max_size[foto, 1024]|is_image[foto]|mime_in[foto,image/jpg,image/JPG,image/jpeg,image/JPEG,image/png]',
                'errors' => [
                    'uploaded' => 'gambar harus ditambahkan',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'

                ]
            ]
        ])) {

            return redirect()->to('/data_logo/')->withInput();
        }

        $fotoFile = $this->request->getFile('foto');
        $namaFoto = $fotoFile->getRandomName();
        $fotoFile->move('assets/img/logo', $namaFoto);


        $this->logoModel->save([
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_logo');
    }

    public function update($id)
    {
        if (!$this->validate([
            'foto' => [
                'rules' => 'max_size[foto, 1024]|is_image[foto]|mime_in[foto,image/jpg,image/JPG,image/jpeg,image/JPEG,image/png]',
                'errors' => [
                    'uploaded' => 'gambar harus ditambahkan',
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'

                ]
            ]
        ])) {

            return redirect()->to('/update_logo/' . $this->request->getVar('id'))->withInput();
        }

        $fotoFile = $this->request->getFile('foto');
        if ($fotoFile->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fotoFile->getRandomName();
            $fotoFile->move('assets/img/logo', $namaFoto);
            unlink('assets/img/logo/' . $this->request->getVar('fotoLama'));
        }

        $this->logoModel->save([
            'id' => $id,
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_logo');
    }

    public function delete($id)
    {
        $logo = $this->logoModel->find($id);
        unlink('assets/img/logo/' . $logo['foto']);
        $this->logoModel->delete($id);
        session()->getFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/data_logo');
    }
}
