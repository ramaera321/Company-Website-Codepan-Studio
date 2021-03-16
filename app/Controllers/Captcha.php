<?php

namespace App\Controllers;

use App\Models\CaptchaModel;

class Captcha extends BaseController
{
    protected $captchaModel;
    public function __construct()
    {
        $this->captchaModel = new CaptchaModel();
    }

    public function index()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $captcha = $this->captchaModel->findAll();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Home Captcha',
                    'captcha' => $captcha,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/captcha/v_data_captcha', $data);
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

    public function UpdateCaptcha($id)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $captcha = $this->captchaModel->where(['id' => $id])->first();
                $data = [
                    'judul' => 'Home Page Data | Admin',
                    'title' => 'Update Captcha',
                    'captcha' => $captcha,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/captcha/v_update_captcha', $data);
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
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus ditambahkan'
                ]
            ],
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

            return redirect()->to('/captcha/')->withInput();
        }

        $fotoFile = $this->request->getFile('foto');
        $namaFoto = $fotoFile->getRandomName();
        $fotoFile->move('assets/img/captcha', $namaFoto);


        $this->captchaModel->save([
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/captcha/');
    }

    public function update($id)
    {
        if (!$this->validate([
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus ditambahkan'
                ]
            ],
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

            return redirect()->to('/captcha/updateCaptcha/' . $this->request->getVar('id'))->withInput();
        }

        $fotoFile = $this->request->getFile('foto');
        if ($fotoFile->getError() == 4) {
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            $namaFoto = $fotoFile->getRandomName();
            $fotoFile->move('assets/img/captcha', $namaFoto);
            unlink('assets/img/captcha/' . $this->request->getVar('fotoLama'));
        }

        $this->captchaModel->save([
            'id' => $id,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/captcha/index');
    }

    public function delete($id)
    {
        $captcha = $this->captchaModel->find($id);
        unlink('assets/img/captcha/' . $captcha['foto']);
        $this->captchaModel->delete($id);
        session()->getFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/captcha/');
    }
}
