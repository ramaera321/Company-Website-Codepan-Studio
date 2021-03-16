<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Login extends BaseController
{
    protected $adminModel;
    public function __construct()
    {
        $this->adminModel = new AdminModel();
    }
    public function index()
    {
        helper(['form']);
        return view('templates/v_login');
    }

    public function admin()
    {
        $data = [
            'id' => session()->get('id'),
            'tipe_admin' => session()->get('tipe_admin'),
            'nama'     => session()->get('nama'),
            'email'     => session()->get('email'),
            'password'     => session()->get('password'),
            'foto'     => session()->get('foto'),
        ];
        return view('admin/v_superadmin_home', $data);
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
