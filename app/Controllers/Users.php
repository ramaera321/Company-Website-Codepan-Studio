<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\BlogModel;
use App\Models\PortfolioModel;
use CodeIgniter\I18n\Time;

class Users extends BaseController
{
    protected $bannerModel;
    protected $portfolioModel;
    protected $blogModel;
    public function __construct()
    {
        $this->bannerModel = new BannerModel();
        $this->portfolioModel = new PortfolioModel();
        $this->blogModel = new BlogModel();
    }

    public function index()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $portfolio = $this->portfolioModel->findAll();
        $blog = $this->blogModel->findAll();
        $data = [
            'judul' => 'Home Codepan Surabaya',
            'banner' => $banner,
            'portfolio' => $portfolio,
            'blog' => $blog,
        ];
        return view('users/index', $data);
    }

    public function blog()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Blog Page',
            'banner' => $banner,
        ];
        return view('users/blog', $data);
    }

    public function kontak()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Kontak Page',
            'banner' => $banner,
        ];
        return view('users/kontak', $data);
    }

    public function karir()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Karir Page',
            'banner' => $banner,
        ];
        return view('users/karir', $data);
    }

    public function portofolio()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Portofolio Page',
            'banner' => $banner,
        ];
        return view('users/portfolio', $data);
    }

    public function layanan_it()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Layanan IT Page',
            'banner' => $banner,
        ];
        return view('users/layanan_it', $data);
    }

    public function tentang_kami()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Tentang Kami Page',
            'banner' => $banner,
        ];
        return view('users/tentang_kami', $data);
    }

    public function sistem_informasi()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Sistem Informasi Page',
            'banner' => $banner,
        ];
        return view('users/sistem_informasi', $data);
    }

    public function aplikasi_mobile()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Aplikasi Mobile Page',
            'banner' => $banner,
        ];
        return view('users/aplikasi_mobile', $data);
    }

    public function aplikasi_egov()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Aplikasi E-Goverment Page',
            'banner' => $banner,
        ];
        return view('users/aplikasi_egov', $data);
    }

    public function integrasi_sistem()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Integrasi Sistem Page',
            'banner' => $banner,
        ];
        return view('users/integrasi_sistem', $data);
    }

    public function pengadaan_it()
    {
        $banner = $this->bannerModel->where(['layanan' => 'home'])->first();
        $data = [
            'judul' => 'Pengadaan IT Page',
            'banner' => $banner,
        ];
        return view('users/pengadaan_it', $data);
    }
}
