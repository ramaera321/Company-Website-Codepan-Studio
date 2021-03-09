<?php

namespace App\Controllers;

use App\Models\TagModel;

class Tag extends BaseController
{
    protected $tagModel;
    public function __construct()
    {
        $this->tagModel = new TagModel();
    }

    public function post()
    {
        if (session()->get('logged_in')) {
            $tag = $this->tagModel->findAll();
            $data = [
                'judul' => 'Add New Tag',
                'title' => 'Add Tag',
                'tag' => $tag,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_add_tag', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function updatePage($id)
    {
        if (session()->get('logged_in')) {
            $tag = $this->tagModel->where(['id' => $id])->first();
            $data = [
                'judul' => 'Update Tag',
                'title' => 'Tag',
                'tag' => $tag,
                'validation' => \Config\Services::validation()
            ];
            return view('admin/kategori/v_update_tag', $data);
        } else {
            return redirect()->to('/login');
        }
    }

    public function save()
    {

        if (!$this->validate([
            'nama_tag' => [
                'rules' => 'required|is_unique[blog_tag.nama_tag]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/data_tag')->withInput();
        }

        $this->tagModel->save([
            'nama_tag' => $this->request->getVar('nama_tag')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/data_tag');
    }

    public function update($id)
    {
        $tag = $this->tagModel->find($id);
        if ($tag['nama_tag'] == $this->request->getVar('nama_tag')) {
            $rules = 'required';
        } else {
            $rules = 'required|is_unique[tag.nama_tag]';
        }
        if (!$this->validate([
            'nama_tag' => [
                'rules' => $rules,
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'is_unique' => 'Nama sudah ada'
                ]
            ]
        ])) {

            return redirect()->to('/update_tag/' . $this->request->getVar('id'))->withInput();
        }

        $this->tagModel->save([
            'id' => $id,
            'nama_tag' => $this->request->getVar('nama_tag')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/data_tag');
    }

    public function delete($id)
    {
        $this->tagModel->delete($id);
        session()->getFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/data_tag');
    }
}
