<?php

namespace App\Controllers;

use App\Models\AdminModel;
// use CodeIgniter\Encryption\Encryption;

class Admin extends BaseController
{
	protected $adminModel;
	// protected $encrypter;
	public function __construct()
	{
		$this->adminModel = new AdminModel();
		// $config = new \Config\Encryption();
		// $encryption = new Encryption();
		// $this->encrypter = $encryption->initialize($config);
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
				'judul' => 'Admin Page'
			];
			return view('admin/v_superadmin_home', $data);
		} else {
			return redirect()->to('/login');
		}
	}

	public function post()
	{
		if (session()->get('logged_in')) {
			if (session()->get('tipe_admin') == 'Super Admin') {
				$data = [
					'judul' => 'Add New Admin',
					'title' => 'Add Admin',
					'validation' => \Config\Services::validation()
				];
				return view('admin/v_add_admin', $data);
			} else {
				return redirect()->to('/admin/');
			}
		} else {
			return redirect()->to('/login');
		}
	}

	public function show()
	{
		if (session()->get('logged_in')) {
			if (session()->get('tipe_admin') == 'Super Admin') {
				$admin = $this->adminModel->findAll();
				$data = [
					'judul' => 'Admin',
					'admin' => $admin
				];
				return view('admin/v_data_admin', $data);
			} else {
				return redirect()->to('/admin/');
			}
		} else {
			return redirect()->to('/login');
		}
	}
	public function updatePage($id)
	{
		if (session()->get('logged_in')) {
			if (session()->get('tipe_admin') == 'Super Admin') {
				$admin = $this->adminModel->where(['id' => $id])->first();
				$data = [
					'judul' => 'Update Admin',
					'title' => 'Admin',
					'admin' => $admin,
					'validation' => \Config\Services::validation()
				];
				return view('admin/v_update_admin', $data);
			} else {
				return redirect()->to('/admin/');
			}
		} else {
			return redirect()->to('/login');
		}
	}
	public function updateAdmin($id)
	{
		if (session()->get('logged_in')) {
			$data = [
				'judul' => 'Update Admin',
				'title' => 'Admin',
				'id'        => session()->get('id'),
				'nama'      => session()->get('nama'),
				'email'     => session()->get('email'),
				'password'  => session()->get('password'),
				'tipe_admin' => session()->get('tipe_admin'),
				'foto'      => session()->get('foto'),
				'validation' => \Config\Services::validation()
			];
			return view('admin/v_up_admin', $data);
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
			$fotoProfile->move('assets/img/admin', $fotoName);
		}
		// $newName = $fotoProfile->getRandomName();
		$password = $this->request->getVar('password');

		$this->adminModel->save([
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'password' => md5($password),
			'tipe_admin' => $this->request->getVar('tipe_admin'),
			'foto' => $fotoName
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

		return redirect()->to('/data_admin');
	}

	public function update($id)
	{
		$password = $this->request->getVar('password');
		if ($password == null) {
			$rules = 'min_length[0]';
			$dataPassword = $this->request->getVar('passwordLama');
		} else {
			$rules = 'min_length[8]';
			$dataPassword = md5($password);
		}
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
				'rules' => $rules,
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

			return redirect()->to('/admin/updatePage/' . $this->request->getVar('id'))->withInput();
		}

		$fotoProfile = $this->request->getFile('foto');

		if ($fotoProfile->getError() == 4) {
			$fotoName = $this->request->getVar('fotoLama');
		} else {
			$fotoName = $fotoProfile->getRandomName();
			$fotoProfile->move('assets/img/admin', $fotoName);
			unlink('assets/img/admin/' . $this->request->getVar('fotoLama'));
		}
		// $newName = $fotoProfile->getRandomName();

		$this->adminModel->save([
			'id' => $id,
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'password' => $dataPassword,
			'tipe_admin' => $this->request->getVar('tipe_admin'),
			'foto' => $fotoName
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/data_admin');
	}

	public function up($id)
	{
		$password = $this->request->getVar('password');
		if ($password == null) {
			$rules = 'min_length[0]';
			$dataPassword = $this->request->getVar('passwordLama');
		} else {
			$rules = 'min_length[8]';
			$dataPassword = md5($password);
		}
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
				'rules' => $rules,
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

			return redirect()->to('/admin/updateAdmin/' . $this->request->getVar('id'))->withInput();
		}

		$fotoProfile = $this->request->getFile('foto');

		if ($fotoProfile->getError() == 4) {
			$fotoName = $this->request->getVar('fotoLama');
		} else {
			$fotoName = $fotoProfile->getRandomName();
			$fotoProfile->move('assets/img/admin', $fotoName);
			unlink('assets/img/admin/' . $this->request->getVar('fotoLama'));
		}
		// $newName = $fotoProfile->getRandomName();
		$password = $this->request->getVar('password');

		$this->adminModel->save([
			'id' => $id,
			'nama' => $this->request->getVar('nama'),
			'email' => $this->request->getVar('email'),
			'password' => $dataPassword,
			'tipe_admin' => $this->request->getVar('tipe_admin'),
			'foto' => $fotoName
		]);

		$ses_data = [
			'id'        => $id,
			'nama'      => $this->request->getVar('nama'),
			'email'     => $this->request->getVar('email'),
			'password'  => md5($password),
			'tipe_admin' => $this->request->getVar('tipe_admin'),
			'foto'     => $fotoName,
		];
		session()->set($ses_data);

		session()->setFlashdata('pesan', 'Data berhasil diubah.');

		return redirect()->to('/admin/');
	}

	public function delete($id)
	{
		$admin = $this->adminModel->find($id);

		if ($admin['foto'] != 'customer-service.png') {
			unlink('assets/img/admin/' . $admin['foto']);
		}

		$this->adminModel->delete($id);
		session()->getFlashdata('pesan', 'data berhasil dihapus');
		return redirect()->to('/data_admin');
	}
}
