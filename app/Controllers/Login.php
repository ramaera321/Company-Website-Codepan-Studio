<?php

namespace App\Controllers;

use App\Models\AdminModel;
// use CodeIgniter\Encryption\Encryption;

class Login extends BaseController
{
    protected $adminModel;
    protected $encrypter;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
        // $config = new \Config\Encryption();
        // $encryption = new Encryption();
        // $this->encrypter = $encryption->initialize($config);
    }
    public function index()
    {
        return view('templates/v_login');
    }

    public function admin()
    {
        if (session()->get('logged_in')) {
            $data = [
                'judul' => 'Admin',
                'id' => session()->get('id'),
                'tipe_admin' => session()->get('tipe_admin'),
                'nama'     => session()->get('nama'),
                'email'     => session()->get('email'),
                'password'     => session()->get('password'),
                'foto'     => session()->get('foto'),
            ];
            return view('admin/v_superadmin_home', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function auth()
    {
        $session =  session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->adminModel->where(['email' => $email])->first();
        if ($data) {
            $pass = $data['password'];
            // $verify_pass = password_verify($password, $pass);
            if ($password == $pass) {
                $ses_data = [
                    'id'        => $data['id'],
                    'nama'      => $data['nama'],
                    'email'     => $data['email'],
                    'password'  => $data['password'],
                    'tipe_admin' => $data['tipe_admin'],
                    'foto'     => $data['foto'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/login/admin');
            } else {
                $session->setFlashdata('pesan', 'Password Salah ');
                return redirect()->to('/login/');
            }
        } else {
            $session->setFlashdata('pesan', 'Email Tidak Ditemukan');
            return redirect()->to('/login/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('index');
    }
}
