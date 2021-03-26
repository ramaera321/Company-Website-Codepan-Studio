<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\KomentarModel;

class Komentar extends BaseController
{
    protected $komentarModel;
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        $this->komentarModel = new KomentarModel();
    }
    public function index()
    {
        if (session()->get('tipe_admin') == 'Super Admin') {
            $komentar = $this->komentarModel->findAll();
            $admin = $this->adminModel;
            $data = [
                'judul' => 'Komentar',
                'komentar' => $komentar,
                'adminData' => $admin,
            ];
            return view('admin/komentar/v_data_komentar', $data);
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
    }

    public function post()
    {
        if (session()->get('tipe_admin') == 'Super Admin') {
            $data = [
                'judul' => 'Add New Komentar',
                'validation' => \Config\Services::validation()
            ];
            return view('admin/komentar/v_add_komentar', $data);
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
    }

    public function updatePage($id)
    {
        if (session()->get('tipe_admin') == 'Super Admin') {
            $komentar = $this->komentarModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Update Komenter',
                'komentar' => $komentar,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/komentar/v_update_komentar', $data);
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
    }

    public function save()
    {

        if (!$this->validate([
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Kategori harus diisi'
                ]
            ],
            'perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Perusahaan harus diisi'
                ]
            ],
            'komentar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Komentar harus diisi'
                ]
            ],
        ])) {

            return redirect()->to('/add_komentar')->withInput();
        }

        $this->komentarModel->save([
            'jabatan' => $this->request->getVar('jabatan'),
            'perusahaan' => $this->request->getVar('perusahaan'),
            'komentar' => $this->request->getVar('komentar'),
            'id_admin' => $this->request->getVar('id_admin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_komentar');
        // $gambarUtama = $this->request->getFile('foto');

        // if ($gambarUtama->getError() == 4) {
        //     $fotoName = 'image.png';
        // } else {
        //     $fotoName = $gambarUtama->getRandomName();
        //     $gambarUtama->move('assets/img/blog', $fotoName);
        // }
        // $newName = $fotoProfile->getRandomName();

        // $slug = url_title($this->request->getVar('judul'), '-', true);


        // $db = \Config\Database::connect();
        // $blog_tag = $db->table('blog_tag');
        // $checkbox = $_POST['tag'];
        // $data_tag = array();
        // for ($i = 0; $i < count($checkbox); $i++) {
        //     $data_tag[] = array(
        //         'nama_tag' => $checkbox[$i],
        //         'blog_slug' => $slug
        //     );
        // }


        // $this->blogTagModel->insertBatch($data_tag);

        // $checkbox = $this->request->getVar('tag');
        // $tag = implode(" ", $checkbox);
        // $this->blogTagModel->save([
        //     'nama_tag' => $tag,
        //     'blog_slug' => $slug
        // ]);

    }
    public function update($id)
    {
        if (!$this->validate([
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Kategori harus diisi'
                ]
            ],
            'perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Perusahaan harus diisi'
                ]
            ],
            'komentar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Komentar harus diisi'
                ]
            ],
        ])) {

            return redirect()->to('/update_komentar')->withInput();
        }

        $this->komentarModel->save([
            'id' => $id,
            'jabatan' => $this->request->getVar('jabatan'),
            'perusahaan' => $this->request->getVar('perusahaan'),
            'komentar' => $this->request->getVar('komentar'),
            'id_admin' => $this->request->getVar('id_admin'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_komentar');
    }

    public function delete($id)
    {
        $this->komentarModel->delete($id);
        session()->getFlashdata('pesan', 'data telah dihapus');
        return redirect()->to('/data_komentar');
    }
}
