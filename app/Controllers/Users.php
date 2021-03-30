<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BannerModel;
use App\Models\BlogModel;
use App\Models\KarirModel;
use App\Models\KomentarModel;
use App\Models\PemesananModel;
use App\Models\PortfolioModel;
use CodeIgniter\I18n\Time;

class Users extends BaseController
{
    protected $bannerModel;
    protected $portfolioModel;
    protected $blogModel;
    protected $karirModel;
    protected $komentarModel;
    protected $adminModel;
    protected $pemesananModel;
    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->portfolioModel = new PortfolioModel();
        $this->blogModel = new BlogModel();
        $this->karirModel = new KarirModel();
        $this->komentarModel = new KomentarModel();
        $this->adminModel = new AdminModel();
        $this->pemesananModel = new PemesananModel();
    }

    public function index()
    {
        $komentar = $this->komentarModel->findAll(2);
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
        $blog = $this->blogModel->orderBy('id', 'desc')->findAll();
        $data = [
            'judul' => 'Blog Page',
            'blog' => $blog,
        ];
        return view('users/blog', $data);
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
        $portfolio = $this->portfolioModel->orderBy('id', 'desc')->findAll();
        $portfolio_mobile = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi Mobile'])->findAll();
        $portfolio_pengadaan = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Pengadaan IT'])->findAll();
        $portfolio_SI = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Sistem Informasi'])->findAll();
        $portfolio_integrasi = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Integrasi Sistem'])->findAll();
        $portfolio_egov = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi E-Gov'])->findAll();
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
        $banner = $this->bannerModel->where(['layanan' => 'informasi'])->first();
        $portfolio_SI = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Sistem Informasi'])->findAll();
        $data = [
            'judul' => 'Sistem Informasi Page',
            'banner' => $banner,
            'portfolio' => $portfolio_SI,
        ];
        return view('users/sistem_informasi', $data);
    }

    public function aplikasi_mobile()
    {
        $banner = $this->bannerModel->where(['layanan' => 'mobile'])->first();
        $portfolio_mobile = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi Mobile'])->findAll();
        $data = [
            'judul' => 'Aplikasi Mobile Page',
            'banner' => $banner,
            'portfolio' => $portfolio_mobile,
        ];
        return view('users/aplikasi_mobile', $data);
    }

    public function aplikasi_egov()
    {
        $banner = $this->bannerModel->where(['layanan' => 'egov'])->first();
        $portfolio_egov = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Aplikasi E-Gov'])->findAll();
        $data = [
            'judul' => 'Aplikasi E-Goverment Page',
            'banner' => $banner,
            'portfolio' => $portfolio_egov,
        ];
        return view('users/aplikasi_egov', $data);
    }

    public function integrasi_sistem()
    {
        $banner = $this->bannerModel->where(['layanan' => 'integrasi'])->first();
        $portfolio_integrasi = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Integrasi Sistem'])->findAll();
        $data = [
            'judul' => 'Integrasi Sistem Page',
            'banner' => $banner,
            'portfolio' => $portfolio_integrasi,
        ];
        return view('users/integrasi_sistem', $data);
    }

    public function pengadaan_it()
    {
        $banner = $this->bannerModel->where(['layanan' => 'pengadaan'])->first();
        $portfolio_pengadaan = $this->portfolioModel->orderBy('id', 'desc')->where(['kategori' => 'Pengadaan IT'])->findAll();
        $data = [
            'judul' => 'Pengadaan IT Page',
            'banner' => $banner,
            'portfolio' => $portfolio_pengadaan,
        ];
        return view('users/pengadaan_it', $data);
    }
}