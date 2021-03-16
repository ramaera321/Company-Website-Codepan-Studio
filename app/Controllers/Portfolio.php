<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PortfolioModel;
use App\Models\PortfolioTagModel;
use App\Models\KategoriModel;
use App\Models\SubKategoriModel;
use App\Models\TagModel;

class Portfolio extends BaseController
{
    protected $portfolioModel;
    protected $adminModel;
    protected $tagModel;
    protected $kategoriModel;
    protected $subKategoriModel;
    protected $portfolioTagModel;
    public function __construct()
    {
        $this->portfolioModel = new PortfolioModel();
        $this->adminModel = new AdminModel();
        $this->tagModel = new TagModel();
        $this->kategoriModel = new KategoriModel();
        $this->subKategoriModel = new SubKategoriModel();
        $this->portfolioTagModel = new PortfolioTagModel();
    }
    public function index()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $portfolio = $this->portfolioModel->findAll();
                $data = [
                    'judul' => 'Portfolio',
                    'portfolio' => $portfolio
                ];
                return view('admin/portfolio/v_data_portfolio', $data);
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

    public function post()
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                $kategori = $this->kategoriModel->findAll();
                $sub_kategori = $this->subKategoriModel->findAll();
                $penulis = $this->adminModel->findAll();
                $tag = $this->tagModel->findAll();
                $data = [
                    'judul' => 'Add New Portfolio',
                    'penulis' => $penulis,
                    'tag' => $tag,
                    'kategori' => $kategori,
                    'sub_kategori' => $sub_kategori,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/portfolio/v_add_portfolio', $data);
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

    public function updatePage($slug)
    {
        if (session()->get('logged_in')) {
            if (session()->get('tipe_admin') == 'Super Admin') {
                // $this->db->select('nama_tag');
                // $this->db->from('portfolio_tag');
                // $this->db->join('portfolio', 'portfolio.slug = portfolio_tag.slug');
                // $data_tag = $this->db->get();

                $portfolio_tag = $this->portfolioTagModel->where(['portfolio_slug' => $slug])->first();
                $portfolio = $this->portfolioModel->where(['slug' => $slug])->first();
                $kategori = $this->kategoriModel->findAll();
                $sub_kategori = $this->subKategoriModel->findAll();
                $penulis = $this->adminModel->findAll();
                $tag = $this->tagModel->findAll();
                $data = [
                    'judul' => 'Add New Portfolio',
                    'penulis' => $penulis,
                    'tag' => $tag,
                    'portfolio' => $portfolio,
                    'portfolio_tag' => $portfolio_tag,
                    'kategori' => $kategori,
                    'sub_kategori' => $sub_kategori,
                    'validation' => \Config\Services::validation()
                ];
                return view('admin/portfolio/v_update_portfolio', $data);
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
            'judul' => [
                'rules' => 'required|is_unique[portfolio.judul]',
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
            'tentang_mitra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'tantangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'solusi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'hasil' => [
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

            return redirect()->to('/add_portfolio')->withInput();
        }

        $gambarUtama = $this->request->getFile('foto');

        if ($gambarUtama->getError() == 4) {
            $fotoName = 'image.png';
        } else {
            $fotoName = $gambarUtama->getRandomName();
            $gambarUtama->move('assets/img/portfolio', $fotoName);
        }
        // $newName = $fotoProfile->getRandomName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $this->portfolioModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'sub_kategori' => $this->request->getVar('sub_kategori'),
            'tentang_mitra' => $this->request->getVar('tentang_mitra'),
            'tantangan' => $this->request->getVar('tantangan'),
            'solusi' => $this->request->getVar('solusi'),
            'hasil' => $this->request->getVar('hasil'),
            'penulis' => $this->request->getVar('penulis'),
            'foto' => $fotoName,
            'bagian_dari' => 'Portfolio'
        ]);

        // $db = \Config\Database::connect();
        // $portfolio_tag = $db->table('portfolio_tag');
        // $checkbox = $_POST['tag'];
        // $data_tag = array();
        // for ($i = 0; $i < count($checkbox); $i++) {
        //     $data_tag[] = array(
        //         'nama_tag' => $checkbox[$i],
        //         'portfolio_slug' => $slug
        //     );
        // }


        // $this->portfolioTagModel->insertBatch($data_tag);

        $checkbox = $this->request->getVar('tag');
        $tag = implode(" ", $checkbox);
        $this->portfolioTagModel->save([
            'nama_tag' => $tag,
            'portfolio_slug' => $slug
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_portfolio');
    }
    public function update($id)
    {
        $data_portfolio = $this->portfolioModel->find($id);
        if ($data_portfolio['judul'] == $this->request->getVar('judul')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[portfolio.judul]';
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
            'tentang_mitra' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'tantangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'solusi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Materi harus diisi'
                ]
            ],
            'hasil' => [
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

            return redirect()->to('/update_portfolio/' . $this->request->getVar('slug'))->withInput();
        }


        $gambarUtama = $this->request->getFile('foto');

        if ($gambarUtama->getError() == 4) {
            $fotoName = $this->request->getVar('fotoLama');
        } else {
            $fotoName = $gambarUtama->getRandomName();
            $gambarUtama->move('assets/img/portfolio', $fotoName);
            unlink('assets/img/portfolio/' . $this->request->getVar('fotoLama'));
        }
        // $newName = $fotoProfile->getRandomName();

        $slug = url_title($this->request->getVar('judul'), '-', true);

        $checkbox = $this->request->getVar('tag');
        $tag = implode(" ", $checkbox);
        $this->portfolioTagModel->save([
            'nama_tag' => $tag,
            'portfolio_slug' => $slug
        ]);

        $slugLama = $this->request->getVar('slug');
        $tagLama = $this->request->getVar('idTag');
        $this->portfolioTagModel->delete($tagLama);

        $this->portfolioModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'kategori' => $this->request->getVar('kategori'),
            'sub_kategori' => $this->request->getVar('sub_kategori'),
            'tentang_mitra' => $this->request->getVar('tentang_mitra'),
            'tantangan' => $this->request->getVar('tantangan'),
            'solusi' => $this->request->getVar('solusi'),
            'hasil' => $this->request->getVar('hasil'),
            'penulis' => $this->request->getVar('penulis'),
            'foto' => $fotoName,
            'bagian_dari' => 'Portfolio'
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_portfolio');
    }

    public function delete($id)
    {
        $portfolio = $this->portfolioModel->find($id);
        $slug = $portfolio['slug'];
        $portfolio_tag = $this->portfolioTagModel->where(['portfolio_slug' => $slug])->first();
        $tag_id = $portfolio_tag['id'];
        $this->portfolioTagModel->delete($tag_id);
        if ($portfolio['foto'] != 'image.png') {
            unlink('/assets/img/portfolio' . $portfolio['foto']);
        }
        $this->portfolioModel->delete($id);
        session()->getFlashdata('pesan', 'data telah dihapus');
        return redirect()->to('/data_portfolio');
    }
}
