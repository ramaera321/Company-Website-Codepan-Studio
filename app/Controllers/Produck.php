<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\ProduckModel;

class Produck extends BaseController
{
    protected $produckModel;
    protected $adminModel;
    public function __construct()
    {
        $this->produckModel = new ProduckModel();
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        if (session()->get('logged_in')) {
            $produck = $this->produckModel->findAll();
            $data = [
                'judul' => 'Produck',
                'produck' => $produck
            ];
            return view('admin/produck/v_data_produck', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $penulis = $this->adminModel->findAll();
            $data = [
                'judul' => 'Add New Produck',
                'penulis' => $penulis,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/produck/v_add_produck', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($slug)
    {
        if (session()->get('logged_in')) {
            // $this->db->select('nama_tag');
            // $this->db->from('blog_tag');
            // $this->db->join('produck', 'produck.slug = blog_tag.slug');
            // $data_tag = $this->db->get();

            $produck = $this->produckModel->where(['slug' => $slug])->first();
            $penulis = $this->adminModel->findAll();
            $data = [
                'judul' => 'Add New Produck',
                'penulis' => $penulis,
                'produck' => $produck,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/produck/v_update_produck', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[produck.judul]',
                'errors' => [
                    'is_unique' => 'Judul sudah ada',
                    'required' => 'Judul harus diisi'
                ]
            ],
            'describ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi harus diisi'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penulis harus diisi'
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

            return redirect()->to('/add_blog')->withInput();
        }

        $gambarUtama = $this->request->getFile('foto');

        if ($gambarUtama->getError() == 4) {
            $fotoName = 'image.png';
        } else {
            $fotoName = $gambarUtama->getRandomName();
            $gambarUtama->move('assets/img/produck', $fotoName);
        }
        // $newName = $fotoProfile->getRandomName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->produckModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi_singkat' => $this->request->getVar('describ'),
            'isi' => $this->request->getVar('isi'),
            'penulis' => $this->request->getVar('penulis'),
            'foto' => $fotoName,
        ]);

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

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_blog');
    }
    public function update($id)
    {
        $data_blog = $this->produckModel->find($id);
        if ($data_blog['judul'] == $this->request->getVar('judul')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[produck.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rules,
                'errors' => [
                    'is_unique' => 'Judul sudah ada',
                    'required' => 'Judul harus diisi'
                ]
            ],
            'describ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi harus diisi'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Penulis harus diisi'
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

            return redirect()->to('/update_blog/' . $this->request->getVar('slug'))->withInput();
        }


        $gambarUtama = $this->request->getFile('foto');

        if ($gambarUtama->getError() == 4) {
            $fotoName = $this->request->getVar('fotoLama');
        } else {
            $fotoName = $gambarUtama->getRandomName();
            $gambarUtama->move('assets/img/produck', $fotoName);
            unlink('assets/img/produck/' . $this->request->getVar('fotoLama'));
        }
        // $newName = $fotoProfile->getRandomName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->produckModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'deskripsi_singkat' => $this->request->getVar('describ'),
            'isi' => $this->request->getVar('isi'),
            'penulis' => $this->request->getVar('penulis'),
            'foto' => $fotoName,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_blog');
    }

    public function delete($id)
    {
        $produck = $this->produckModel->find($id);
        if ($produck['foto'] != 'image.png') {
            unlink('assets/img/produck/' . $produck['foto']);
        }
        $this->produckModel->delete($id);
        session()->getFlashdata('pesan', 'data telah dihapus');
        return redirect()->to('/data_blog');
    }
}
