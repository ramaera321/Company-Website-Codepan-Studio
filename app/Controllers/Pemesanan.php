<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    protected $pemesananModel;
    public function __construct()
    {
        $this->pemesananModel = new PemesananModel();
    }

    public function index()
    {
        if (session()->get('logged_in')) {
            $data = [
                'validation' => \Config\Services::validation()
            ];
            return view('/', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        $captcha = $this->request->getVar('g-recaptcha-response');
        if (!$captcha) {
            $data = [
                'error' => true,
                'pesan' => 'Please check the the captcha form.',
            ];
            return redirect()->to('/')->with('pesan', 'Please check the the captcha form.');
        }
        $secretKey = "6LdtkpQaAAAAAI3zW1RTPmAwYxm8uxe7V009fXAI";
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response, true);
        if ($responseKeys["success"]) {
            $this->pemesananModel->save([
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'no' => $this->request->getVar('no'),
                'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
                'layanan_it' => $this->request->getVar('layanan_it'),
                'jumlah_orang' => $this->request->getVar('jumlahKaryawan'),
                'bidang_perusahaan' => $this->request->getVar('bidang'),
            ]);
        } else {
            echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/');
    }

    public function delete($id)
    {
        $this->pemesananModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/');
    }
}
