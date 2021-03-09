<?php

namespace App\Controllers;

use App\Models\KontakModel;

class Kontak extends BaseController
{
    protected $kontakModel;
    public function __construct()
    {
        $this->kontakModel = new KontakModel();
    }
    public function index()
    {
        if (session()->get('logged_in')) {
            $kontak = $this->kontakModel->findAll();
            $data = [
                'judul' => 'Kontak Page Data | Admin',
                'title' => 'Kontak Page',
                'kontak' => $kontak
            ];
            return view('admin/kontak/v_data_kontak', $data);
        } else {
            return redirect()->to('/login');
        }
    }
    public function AddKontak()
    {
        if (session()->get('logged_in')) {
            $data = [
                'judul' => 'Kontak Page Data | Admin',
                'title' => 'Add Kontak',
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kontak/v_add_kontak', $data);
        } else {
            return redirect()->to('/login');
        }
    }
    public function UpdateKontak($id)
    {
        if (session()->get('logged_in')) {
            $kontak = $this->kontakModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Kontak Page Data | Admin',
                'title' => 'Update Kontak',
                'kontak' => $kontak,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kontak/v_update_kontak', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {
        if (!$this->validate([
            'hari1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hari Awal harus diisi'
                ]
            ],
            'hari2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hari Terakhir harus diisi'
                ]
            ],
            'jam1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Masuk harus diisi'
                ]
            ],
            'jam2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Pulang harus diisi'
                ]
            ],
            'wa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'WhatsApp Kategori harus diisi'
                ]
            ],
            'telpon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Telpon harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi'
                ]
            ],
            'facebook' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Facebook harus diisi'
                ]
            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instagram harus diisi'
                ]
            ],
            'linkedin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Linked In harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/add_kontak')->withInput();
        }

        $hari1 = $this->request->getVar('hari1');
        $hari2 = $this->request->getVar('hari2');
        $hari = $hari1 . ' ' . $hari2;

        $jam1 = $this->request->getVar('jam1');
        $jam2 = $this->request->getVar('jam2');
        $jam = $jam1 . ' ' . $jam2;

        $this->kontakModel->save([
            'hari' => $hari,
            'jam' => $jam,
            'wa' => $this->request->getVar('wa'),
            'telpon' => $this->request->getVar('telpon'),
            'email' => $this->request->getVar('email'),
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin')
        ]);

        session()->getFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/data_kontak');
    }

    public function update($id)
    {
        if (!$this->validate([
            'hari1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hari Awal harus diisi'
                ]
            ],
            'hari2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Hari Terakhir harus diisi'
                ]
            ],
            'jam1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Masuk harus diisi'
                ]
            ],
            'jam2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam Pulang harus diisi'
                ]
            ],
            'wa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'WhatsApp Kategori harus diisi'
                ]
            ],
            'telpon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Telpon harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi'
                ]
            ],
            'facebook' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Facebook harus diisi'
                ]
            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Instagram harus diisi'
                ]
            ],
            'linkedin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Linked In harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('/update_kontak/' . $id)->withInput();
        }

        $hari1 = $this->request->getVar('hari1');
        $hari2 = $this->request->getVar('hari2');
        $hari = $hari1 . ' ' . $hari2;

        $jam1 = $this->request->getVar('jam1');
        $jam2 = $this->request->getVar('jam2');
        $jam = $jam1 . ' ' . $jam2;

        $this->kontakModel->save([
            'id' => $id,
            'hari' => $hari,
            'jam' => $jam,
            'wa' => $this->request->getVar('wa'),
            'telpon' => $this->request->getVar('telpon'),
            'email' => $this->request->getVar('email'),
            'facebook' => $this->request->getVar('facebook'),
            'instagram' => $this->request->getVar('instagram'),
            'linkedin' => $this->request->getVar('linkedin')
        ]);

        session()->getFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/data_kontak');
    }

    public function delete($id)
    {
        $this->kontakModel->delete($id);
        session()->getFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/data_kontak');
    }
}
