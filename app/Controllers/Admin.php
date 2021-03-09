<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
	protected $adminModel;
	public function __construct()
	{
		$this->adminModel = new AdminModel();
	}

	public function index()
	{
		if (session()->get('logged_in')) {
			$data = [
				'tipe_admin' => session()->get('tipe_admin'),
				'nama' 	=> session()->get('nama'),
				'email' 	=> session()->get('email'),
				'password' 	=> session()->get('password'),
				'foto' 	=> session()->get('foto'),
			];
			return view('admin/v_superadmin_home', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function post()
	{
		if (session()->get('logged_in')) {
			$data = [
				'judul' => 'Add New Admin',
				'title' => 'Add Admin',
				'validation' => \Config\Services::validation()
			];
			return view('admin/v_add_admin', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function show()
	{
		if (session()->get('logged_in')) {
			$admin = $this->adminModel->findAll();
			$data = [
				'judul' => 'Admin',
				'admin' => $admin
			];
			return view('admin/v_data_admin', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function updatePage($id)
	{
		if (session()->get('logged_in')) {
			$admin = $this->adminModel->where(['id' => $id])->first();
			$data = [
				'judul' => 'Update Admin',
				'title' => 'Admin',
				'admin' => $admin,
				'validation' => \Config\Services::validation()
			];
			return view('admin/v_update_admin', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function save()
	{

		if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'email' => [
				'rules' => 'required|is_unique[admin.email]',
				'errors' => [
					'required' => 'Email harus diisi',
					'is_unique' => 'Email sudah digunakan'
				]
			],
			'password' => [
				'rules' => 'required|min_length[8]',
				'errors' => [
					'required' => 'Password harus diisi',
					'min_length' => 'Password harus berisi minimal 8 karakter'
				]
			],
			'tipe_admin' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tipe Admin harus diisi'
				]
			],
			'foto' => [
				'rules' => 'max_size[foto, 1024]|is_image[foto]|mime_in[foto,image/jpg,image/JPG,image/jpeg,image/JPEG,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar terlalu besar',
					'is_image' => 'File yang dipilih bukan gambar',
					'mime_in' => 'File yang dipilih bukan gambar'

				]
			]
		])) {

			return redirect()->to('/add_admin')->withInput();
		}

		$fotoProfile = $this->request->getFile('foto');

		if ($fotoProfile->getError() == 4) {
			$fotoName = 'customer-service.png';
		} else {
			$fotoName = $fotoProfile->getRandomName();
			$fotoProfile->move('assets/img', $fotoName);
		}
		// $newName = $fotoProfile->getRandomName();

		$this->adminModel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password'),
			'tipe_admin' => $this->request->getVar('tipe_admin'),
			'foto' => $fotoName
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/data_admin');
	}

	public function update($id)
	{
		if (!$this->validate([
			'nama' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Nama harus diisi'
				]
			],
			'email' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Email harus diisi'
				]
			],
			'password' => [
				'rules' => 'required|min_length[8]',
				'errors' => [
					'required' => 'Password harus diisi',
					'min_length' => 'Password harus berisi minimal 8 karakter'
				]
			],
			'tipe_admin' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Tipe Admin harus diisi'
				]
			],
			'foto' => [
				'rules' => 'max_size[foto, 1024]|is_image[foto]|mime_in[foto,image/jpg,image/JPG,image/jpeg,image/JPEG,image/png]',
				'errors' => [
					'max_size' => 'Ukuran gambar terlalu besar',
					'is_image' => 'File yang dipilih bukan gambar',
					'mime_in' => 'File yang dipilih bukan gambar'

				]
			]
		])) {

			return redirect()->to('/admin/updatePage/' . $this->request->getVar('id'))->withInput()->with('validation', $validation);;
		}

		$fotoProfile = $this->request->getFile('foto');

		if ($fotoProfile->getError() == 4) {
			$fotoName = $this->request->getVar('fotoLama');
		} else {
			$fotoName = $fotoProfile->getRandomName();
			$fotoProfile->move('assets/img', $fotoName);
			unlink('assets/img/' . $this->request->getVar('fotoLama'));
		}
		// $newName = $fotoProfile->getRandomName();

		$this->adminModel->save([
			'id' => $id,
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'password' => $this->request->getVar('password'),
			'tipe_admin' => $this->request->getVar('tipe_admin'),
			'foto' => $fotoName
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/data_admin');
	}
	public function delete($id)
	{
		$admin = $this->adminModel->find($id);

		if ($admin['foto'] != 'customer-service.png') {
			unlink('assets/img/' . $admin['foto']);
		}

		$this->adminModel->delete($id);
		session()->getFlashdata('pesan', 'data berhasil dihapus');
		return redirect()->to('/data_admin');
	}
}