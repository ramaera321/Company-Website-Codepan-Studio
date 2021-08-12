<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
	echo view('errors/page_404.php');
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//User Routes
$routes->get('/', 'Users::index');
$routes->get('/blog', 'Users::blog');
$routes->get('/hastag/(:segment)', 'Users::hastag/$1');
$routes->get('/blog_kategori/(:segment)', 'Users::blog_kategori/$1');
$routes->get('/blog_sub_kategori/(:segment)', 'Users::blog_sub_kategori/$1');
$routes->get('/blog_describ/(:segment)', 'Users::blog_describe/$1');
$routes->get('/porto_describ/(:segment)', 'Users::porto_describe/$1');
$routes->get('/aturan', 'Users::aturan');
$routes->get('/kontak', 'Users::kontak');
$routes->get('/karir', 'Users::karir');
$routes->get('/portofolio', 'Users::portofolio');
$routes->get('/portfolio_hastag/(:segment)', 'Users::portfolio_hastag/$1');
$routes->get('/portfolio_kategori/(:segment)', 'Users::portfolio_kategori/$1');
$routes->get('/portfolio_describ/(:segment)', 'Users::portfolio_describe/$1');
$routes->get('/layanan_it', 'Users::layanan_it');
$routes->get('/tentang_kami', 'Users::tentang_kami');
$routes->get('/sistem_informasi', 'Users::sistem_informasi');
$routes->get('/aplikasi_mobile', 'Users::aplikasi_mobile');
$routes->get('/aplikasi_egov', 'Users::aplikasi_egov');
$routes->get('/integrasi_sistem', 'Users::integrasi_sistem');
$routes->get('/pengadaan_it', 'Users::pengadaan_it');

// Admin Routes
$routes->get('/login', 'Login::index');
// $routes->get('/', 'Admin::index', ['filter' => 'auth']);
$routes->get('/admin', 'Admin::index');
$routes->get('/add_admin', 'Admin::post');
$routes->get('/data_admin', 'Admin::show');
$routes->get('/update_admin/(:num)', 'Admin::updatePage/$1');
$routes->delete('/admin/(:num)', 'Admin::delete/$1');

//Banner
$routes->get('/data_banner_home', 'Banner::index');
$routes->get('/data_banner_karir', 'Banner::karirbanner');
$routes->get('/data_banner_mobile', 'Banner::mobilebanner');
$routes->get('/data_banner_integrasi', 'Banner::integrasibanner');
$routes->get('/data_banner_pengadaan', 'Banner::pengadaanbanner');
$routes->get('/data_banner_about', 'Banner::aboutmebanner');
$routes->get('/data_banner_egov', 'Banner::egovbanner');
$routes->get('/data_banner_informasi', 'Banner::informasibanner');
$routes->get('/update_banner/(:num)', 'Banner::UpdateBanner/$1');
$routes->delete('/banner/(:num)', 'Banner::delete/$1');

//Blog Admin Routes
$routes->get('/data_blog', 'Blog::index');
$routes->get('/add_blog', 'Blog::post');
$routes->delete('/blog/(:num)', 'Blog::delete/$1');
$routes->get('/update_blog/(:segment)', 'Blog::updatePage/$1');

//Produck Admin Routes
$routes->get('/data_produck', 'Produck::index');
$routes->get('/add_produck', 'Produck::post');
$routes->delete('/produck/(:num)', 'Produck::delete/$1');
$routes->get('/update_produck/(:segment)', 'Produck::updatePage/$1');

// //Blog Admin Routes
// $routes->get('/data_portfolio', 'Portfolio::index');
// $routes->get('/add_portfolio', 'Portfolio::post');
// $routes->delete('/portfolio/(:num)', 'Portfolio::delete/$1');
// $routes->get('/update_portfolio/(:segment)', 'Portfolio::updatePage/$1');

$routes->get('/data_jenjang_karir', 'JenjangKarir::view');
$routes->delete('/jenjang_karir/(:num)', 'JenjangKarir::delete/$1');
$routes->get('/add_jenjang_karir', 'JenjangKarir::add');
$routes->get('/update_jenjang_karir/(:num)', 'JenjangKarir::edit/$1');

//Kontak Admin Routes
$routes->get('/data_kontak', 'Kontak::index');
$routes->get('/add_kontak', 'Kontak::AddKontak');
$routes->delete('/kontak/(:num)', 'Kontak::delete/$1');
$routes->get('/update_kontak/(:num)', 'Kontak::UpdateKontak/$1');

//Cabang Admin Routes
$routes->get('/data_cabang', 'Cabang::post');
$routes->delete('/cabang/(:num)', 'Cabang::delete/$1');
$routes->get('/update_cabang/(:num)', 'Cabang::updatePage/$1');

//Sub Admin Routes
$routes->get('/data_sub', 'Sub::post');
$routes->delete('/sub/(:num)', 'Sub::delete/$1');
$routes->get('/update_sub/(:num)', 'Sub::updatePage/$1');

//Portfolio Sub Kategori
$routes->get('/data_port_sub', 'PortfolioSub::post');
$routes->delete('/port_sub/(:num)', 'PortfolioSub::delete/$1');
$routes->get('/update_port_sub/(:num)', 'PortfolioSub::updatePage/$1');

//Sub Admin Routes
$routes->get('/data_tag', 'Tag::post');
$routes->delete('/tag/(:num)', 'Tag::delete/$1');
$routes->get('/update_tag/(:num)', 'Tag::updatePage/$1');

//Hompage Admin Routes
$routes->get('/data_solusi', 'Banner::SolusiPost');
$routes->get('/add_solusi', 'Banner::AddSolusi');
$routes->get('/update_solusi', 'Banner::UpdateSolusi');

//KarirPage Admin Routes
$routes->get('/data_karir', 'Karir::KarirPost');
$routes->delete('/karir/(:num)', 'Karir::delete/$1');
$routes->get('/add_karir', 'Karir::AddKarir');
$routes->get('/update_karir/(:num)', 'Karir::UpdateKarir/$1');

//Pasal
$routes->get('/data_pasal', 'Pasal::index');
$routes->get('/update_pasal/(:num)', 'Pasal::UpdatePasal/$1');
$routes->delete('/pasal/(:num)', 'Pasal::delete/$1');

//Komentar
$routes->get('/data_komentar', 'Komentar::index');
$routes->get('/add_komentar', 'Komentar::post');
$routes->get('/update_komentar/(:num)', 'Komentar::UpdateKomentar/$1');
$routes->delete('/komentar/(:num)', 'Komentar::delete/$1');

//Kategori
$routes->get('/data_kategori', 'Kategori::post');
$routes->get('/update_kategori/(:num)', 'Kategori::updatePage/$1');
$routes->delete('/kategori/(:num)', 'Kategori::delete/$1');

// Portfolio Kategori
$routes->get('/data_port_kategori', 'PortfolioKategori::post');
$routes->get('/update_port_kategori/(:num)', 'PortfolioKategori::updatePage/$1');
$routes->delete('/port_kategori/(:num)', 'PortfolioKategori::delete/$1');

//Logo
$routes->get('/data_logo', 'Logo::index');
$routes->get('/update_logo/(:num)', 'Logo::Updatelogo/$1');
$routes->delete('/logo/(:num)', 'Logo::delete/$1');

//Ayat
$routes->get('/data_ayat', 'Ayat::index');
$routes->get('/update_ayat/(:num)', 'Ayat::UpdateAyat/$1');

//PortoPage Admin Routes
$routes->get('/data_porto', 'Portfolio::index');
$routes->get('/add_porto', 'Portfolio::post');
$routes->get('/update_porto/(:segment)', 'Portfolio::updatePage/$1');
$routes->delete('/portfolio/(:num)', 'Portfolio::delete/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
