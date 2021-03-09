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
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// Admin Routes
$routes->get('/admin', 'Admin::index');
$routes->get('/add_admin', 'Admin::post');
$routes->get('/data_admin', 'Admin::show');
// $routes->get('/update_admin/(:num)', 'Admin::updatePage');
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

// //Blog Admin Routes
// $routes->get('/data_portfolio', 'Portfolio::index');
// $routes->get('/add_portfolio', 'Portfolio::post');
// $routes->delete('/portfolio/(:num)', 'Portfolio::delete/$1');
// $routes->get('/update_portfolio/(:segment)', 'Portfolio::updatePage/$1');

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

//Kategori
$routes->get('/data_kategori', 'Kategori::post');
$routes->get('/update_kategori/(:num)', 'Kategori::updateKategori/$1');
$routes->delete('/kategori/(:num)', 'Kategori::delete/$1');

//Logo
$routes->get('/data_logo', 'Logo::post');
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
