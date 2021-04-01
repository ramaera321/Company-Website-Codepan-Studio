<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\AyatModel;
use App\Models\BannerModel;
use App\Models\BlogModel;
use App\Models\BlogTagModel;
use App\Models\KarirModel;
use App\Models\KategoriModel;
use App\Models\KomentarModel;
use App\Models\PasalModel;
use App\Models\PemesananModel;
use App\Models\PortfolioModel;
use App\Models\PortfolioTagModel;
use App\Models\SubKategoriModel;
use CodeIgniter\I18n\Time;

class Users extends BaseController
{
    protected $bannerModel;
    protected $portfolioModel;
    protected $blogModel;
    protected $blogTagModel;
    protected $karirModel;
    protected $komentarModel;
    protected $adminModel;
    protected $pemesananModel;
    protected $pasalModel;
    protected $ayatModel;
    protected $kategoriModel;
    protected $subKategoriModel;
    protected $portfolioTagModel;
    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->portfolioModel = new PortfolioModel();
        $this->portfolioTagModel = new PortfolioTagModel();
        $this->blogModel = new BlogModel();
        $this->blogTagModel = new BlogTagModel();
        $this->karirModel = new KarirModel();
        $this->komentarModel = new KomentarModel();
        $this->adminModel = new AdminModel();
        $this->pemesananModel = new PemesananModel();
        $this->pasalModel = new PasalModel();
        $this->ayatModel = new AyatModel();
        $this->kategoriModel = new KategoriModel();
        $this->subKategoriModel = new SubKategoriModel();
    }

    public function index()
    {
        $komentar = $this->komentarModel->orderBy('id', 'desc')->findAll(2);
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $portfolio = $this->portfolioModel->orderBy('id', 'desc')->findAll(2);
        $blog = $this->blogModel->orderBy('id', 'desc')->findAll(3);
        $admin = $this->adminModel;
        $data = [
            'judul' => 'Home Codepan Surabaya',
            'banner' => $banner,
            'portfolio' => $portfolio,
            'blog' => $blog,
            'komentar' => $komentar,
            'adminData' => $admin,
        ];
        return view('users/index', $data);
    }

    public function blog()
    {
        $blog = $this->blogModel->orderBy('id', 'desc')->paginate(6, 'blog');
        $pager = $this->blogModel->orderBy('id', 'desc')->pager;
        $data = [
            'judul' => 'Blog Page',
            'blog' => $blog,
            'pager' => $pager,
        ];
        return view('users/blog', $data);
    }

    public function blog_kategori($kategori)
    {
        $blog = $this->blogModel->orderBy('id', 'desc')->where(['kategori' => $kategori])->paginate(6, 'blog');
        $pager = $this->blogModel->orderBy('id', 'desc')->pager;
        $data = [
            'judul' => 'Blog Page',
            'blog' => $blog,
            'pager' => $pager,
        ];
        return view('users/blog', $data);
    }

    public function blog_sub_kategori($sub_kategori)
    {
        $blog = $this->blogModel->orderBy('id', 'desc')->where(['sub_kategori' => $sub_kategori])->paginate(6, 'blog');
        $pager = $this->blogModel->orderBy('id', 'desc')->pager;
        $data = [
            'judul' => 'Blog Page',
            'blog' => $blog,
            'pager' => $pager,
        ];
        return view('users/blog', $data);
    }

    public function blog_describe($slug)
    {
        helper('text');
        $db = \Config\Database::connect();
        $blog = $this->blogModel->orderBy('id', 'desc')->where(['slug' => $slug])->first();
        $id = $blog['id'];
        $query_prev = $db->query("SELECT * FROM blog WHERE id < $id ORDER BY id DESC LIMIT 1");
        $query_next = $db->query("SELECT * FROM blog WHERE id > $id ORDER BY id ASC LIMIT 1");
        $blog_article1 = $this->blogModel->orderBy('id', 'desc')->findAll(8);
        $blog_article2 = $this->blogModel->orderBy('id', 'desc')->findAll(3);
        $kategori = $this->kategoriModel->orderBy('id', 'desc')->findAll();
        $blog_tag = $this->portfolioTagModel->where(['blog_slug' => $slug])->first();
        $sub_kategori = $this->subKategoriModel->orderBy('id', 'desc')->findAll();
        $data = [
            'judul' => ucwords($blog['judul']),
            'blog' => $blog,
            'blog_tag' => $blog_tag,
            'id' => $id,
            'query_prev' => $query_prev,
            'kategori' => $kategori,
            'sub_kategori' => $sub_kategori,
            'query_next' => $query_next,
            'blog_article1' => $blog_article1,
            'blog_article2' => $blog_article2,
        ];
        return view('users/blog_deskrip', $data);
    }

    public function aturan()
    {
        $pasal = $this->pasalModel;
        $ayat = $this->ayatModel;
        $data = [
            'judul' => 'Aturan Layanan Page',
            'pasal' => $pasal,
            'ayat' => $ayat,
        ];
        return view('users/aturan_layanan', $data);
    }

    public function kontak()
    {
        $data = [
            'judul' => 'Kontak Page',
        ];
        return view('users/kontak', $data);
    }

    public function karir()
    {
        $karir = $this->karirModel->findAll();
        $banner = $this->bannerModel->where(['layanan' => 'karir'])->first();
        $data = [
            'judul' => 'Karir Page',
            'banner' => $banner,
            'karir' => $karir,
        ];
        return view('users/karir', $data);
    }

    public function portofolio()
    {
        $portfolio = $this->portfolioModel->orderBy('id', 'desc')->findAll(9);
        $portfolio_mobile = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi Mobile'])->findAll(9);
        $portfolio_pengadaan = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Pengadaan IT'])->findAll(9);
        $portfolio_SI = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Sistem Informasi'])->findAll(9);
        $portfolio_integrasi = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Integrasi Sistem'])->findAll(9);
        $portfolio_egov = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi E-Gov'])->findAll(9);
        $data = [
            'judul' => 'Portofolio Page',
            'portfolio' => $portfolio,
            'portfolio_mobile' => $portfolio_mobile,
            'portfolio_pengadaan' => $portfolio_pengadaan,
            'portfolio_SI' => $portfolio_SI,
            'portfolio_integrasi' => $portfolio_integrasi,
            'portfolio_egov' => $portfolio_egov,
        ];
        return view('users/portfolio', $data);
    }

    public function portfolio_describe($slug)
    {
        helper('text');
        $db = \Config\Database::connect();
        $portfolio_tag = $this->portfolioTagModel->where(['portfolio_slug' => $slug])->first();
        $portfolio = $this->portfolioModel->orderBy('id', 'desc')->where(['slug' => $slug])->first();
        $id = $portfolio['id'];
        $query_prev = $db->query("SELECT * FROM portfolio WHERE id < $id ORDER BY id DESC LIMIT 1");
        $query_next = $db->query("SELECT * FROM portfolio WHERE id > $id ORDER BY id ASC LIMIT 1");
        $data = [
            'judul' => ucwords($portfolio['judul']),
            'portfolio' => $portfolio,
            'portfolio_tag' => $portfolio_tag,
            'id' => $id,
            'query_prev' => $query_prev,
            'query_next' => $query_next,
        ];
        return view('users/portfolio_deskrip', $data);
    }

    public function layanan_it()
    {
        $data = [
            'judul' => 'Layanan IT Page',
        ];
        return view('users/layanan_it', $data);
    }

    public function tentang_kami()
    {
        $banner = $this->bannerModel->where(['layanan' => 'about'])->first();
        $blog = $this->blogModel->orderBy('id', 'desc')->findAll(3);
        $data = [
            'judul' => 'Tentang Kami Page',
            'banner' => $banner,
            'blog' => $blog,
        ];
        return view('users/tentang_kami', $data);
    }

    public function sistem_informasi()
    {
        $admin = $this->adminModel;
        $komentar = $this->komentarModel->orderBy('id', 'desc')->findAll(2);
        $banner = $this->bannerModel->where(['layanan' => 'informasi'])->first();
        $portfolio_SI = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Sistem Informasi'])->findAll();
        $data = [
            'judul' => 'Sistem Informasi Page',
            'banner' => $banner,
            'portfolio' => $portfolio_SI,
            'komentar' => $komentar,
            'adminData' => $admin,
        ];
        return view('users/sistem_informasi', $data);
    }

    public function aplikasi_mobile()
    {
        $admin = $this->adminModel;
        $komentar = $this->komentarModel->orderBy('id', 'desc')->findAll(2);
        $banner = $this->bannerModel->where(['layanan' => 'mobile'])->first();
        $portfolio_mobile = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi Mobile'])->findAll();
        $data = [
            'judul' => 'Aplikasi Mobile Page',
            'banner' => $banner,
            'portfolio' => $portfolio_mobile,
            'komentar' => $komentar,
            'adminData' => $admin,
        ];
        return view('users/aplikasi_mobile', $data);
    }

    public function aplikasi_egov()
    {
        $admin = $this->adminModel;
        $komentar = $this->komentarModel->orderBy('id', 'desc')->findAll(2);
        $banner = $this->bannerModel->where(['layanan' => 'egov'])->first();
        $portfolio_egov = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi E-Gov'])->findAll();
        $data = [
            'judul' => 'Aplikasi E-Goverment Page',
            'banner' => $banner,
            'portfolio' => $portfolio_egov,
            'komentar' => $komentar,
            'adminData' => $admin,
        ];
        return view('users/aplikasi_egov', $data);
    }

    public function integrasi_sistem()
    {
        $admin = $this->adminModel;
        $komentar = $this->komentarModel->orderBy('id', 'desc')->findAll(2);
        $banner = $this->bannerModel->where(['layanan' => 'integrasi'])->first();
        $portfolio_integrasi = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Integrasi Sistem'])->findAll();
        $data = [
            'judul' => 'Integrasi Sistem Page',
            'banner' => $banner,
            'portfolio' => $portfolio_integrasi,
            'komentar' => $komentar,
            'adminData' => $admin,
        ];
        return view('users/integrasi_sistem', $data);
    }

    public function pengadaan_it()
    {
        $admin = $this->adminModel;
        $komentar = $this->komentarModel->orderBy('id', 'desc')->findAll(2);
        $banner = $this->bannerModel->where(['layanan' => 'pengadaan'])->first();
        $portfolio_pengadaan = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Pengadaan IT'])->findAll();
        $data = [
            'judul' => 'Pengadaan IT Page',
            'banner' => $banner,
            'portfolio' => $portfolio_pengadaan,
            'komentar' => $komentar,
            'adminData' => $admin,
        ];
        return view('users/pengadaan_it', $data);
    }
}
