<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BlogModel;
use App\Models\BlogTagModel;
use App\Models\KategoriModel;
use App\Models\SubKategoriModel;
use App\Models\TagModel;

class Blog extends BaseController
{
    protected $blogModel;
    protected $adminModel;
    protected $tagModel;
    protected $kategoriModel;
    protected $subKategoriModel;
    protected $blogTagModel;
    public function __construct()
    {
        $this->blogModel = new BlogModel();
        $this->adminModel = new AdminModel();
        $this->tagModel = new TagModel();
        $this->kategoriModel = new KategoriModel();
        $this->subKategoriModel = new SubKategoriModel();
        $this->blogTagModel = new BlogTagModel();
    }
    public function index()
    {
        if (session()->get('logged_in')) {
            $blog = $this->blogModel->findAll();
            $data = [
                'judul' => 'Blog',
                'blog' => $blog
            ];
            return view('admin/blog/v_data_blog', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $kategori = $this->kategoriModel->findAll();
            $sub_kategori = $this->subKategoriModel->findAll();
            $penulis = $this->adminModel->findAll();
            $tag = $this->tagModel->findAll();
            $data = [
                'judul' => 'Add New Blog',
                'penulis' => $penulis,
                'tag' => $tag,
                'kategori' => $kategori,
                'sub_kategori' => $sub_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/blog/v_add_blog', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($slug)
    {

        if (session()->get('logged_in')) {
            // $this->db->select('nama_tag');
            // $this->db->from('blog_tag');
            // $this->db->join('blog', 'blog.slug = blog_tag.slug');
            // $data_tag = $this->db->get();

            $blog_tag = $this->blogTagModel->where(['blog_slug' => $slug])->first();
            $blog = $this->blogModel->where(['slug' => $slug])->first();
            $kategori = $this->kategoriModel->findAll();
            $sub_kategori = $this->subKategoriModel->findAll();
            $penulis = $this->adminModel->findAll();
            $tag = $this->tagModel->findAll();
            $data = [
                'judul' => 'Add New Blog',
                'penulis' => $penulis,
                'tag' => $tag,
                'blog' => $blog,
                'blog_tag' => $blog_tag,
                'kategori' => $kategori,
                'sub_kategori' => $sub_kategori,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/blog/v_update_blog', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {
        $request = \Config\Services::request();
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[blog.judul]',
                'errors' => [
                    'is_unique' => 'Judul sudah ada',
                    'required' => 'Judul harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'sub_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sub Kategori harus diisi'
                ]
            ],
            'describ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'materi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
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
            $gambarUtama->move('assets/img/blog', $fotoName);
        }
        // $newName = $fotoProfile->getRandomName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->blogModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'sub_kategori' => $this->request->getVar('sub_kategori'),
            'describ' => $this->request->getVar('describ'),
            'materi' => $this->request->getVar('materi'),
            'penulis' => $this->request->getVar('penulis'),
            'foto' => $fotoName,
            'bagian_dari' => 'Blog'
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

        $checkbox = $this->request->getVar('tag');
        $tag = implode(" ", $checkbox);
        $this->blogTagModel->save([
            'nama_tag' => $tag,
            'blog_slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_blog');
    }
    public function update($id)
    {
        $data_blog = $this->blogModel->find($id);
        if ($data_blog['judul'] == $this->request->getVar('judul')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[blog.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rules,
                'errors' => [
                    'is_unique' => 'Judul sudah ada',
                    'required' => 'Judul harus diisi'
                ]
            ],
            'kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kategori harus diisi'
                ]
            ],
            'sub_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sub Kategori harus diisi'
                ]
            ],
            'describ' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi'
                ]
            ],
            'materi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
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
            $gambarUtama->move('assets/img/blog', $fotoName);
            unlink('assets/img/blog/' . $this->request->getVar('fotoLama'));
        }
        // $newName = $fotoProfile->getRandomName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $checkbox = $this->request->getVar('tag');
        $tag = implode(" ", $checkbox);
        $this->blogTagModel->save([
            'nama_tag' => $tag,
            'blog_slug' => $slug
        ]);

        $tagLama = $this->request->getVar('idTag');
        $this->blogTagModel->delete($tagLama);

        $this->blogModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'sub_kategori' => $this->request->getVar('sub_kategori'),
            'describ' => $this->request->getVar('describ'),
            'materi' => $this->request->getVar('materi'),
            'penulis' => $this->request->getVar('penulis'),
            'foto' => $fotoName,
            'bagian_dari' => 'Blog'
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_blog');
    }

    public function delete($id)
    {
        $blog = $this->blogModel->find($id);
        $slug = $blog['slug'];
        $blog_tag = $this->blogTagModel->where(['blog_slug' => $slug])->first();
        $tag_id = $blog_tag['id'];
        $this->blogTagModel->delete($tag_id);
        if ($blog['foto'] != 'image.png') {
            unlink('assets/img/blog/' . $blog['foto']);
        }
        $this->blogModel->delete($id);
        session()->getFlashdata('pesan', 'data telah dihapus');
        return redirect()->to('/data_blog');
    }
}
