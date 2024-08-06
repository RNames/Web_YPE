<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('lang/{locale}', 'Language::index');

// Default language: id-ID
$routes->get('/', function() {
    return redirect()->to('/id');
});
$routes->get('/id', 'HomepageController::index');
$routes->get('/en', 'HomepageController::index');


$routes->get('/id/destinasi', 'DestinationController::index');
$routes->get('/id/destinasi/(:segment)', 'DestinationController::detail/$1');
$routes->get('/en/destination', 'DestinationController::index');
$routes->get('/en/destination/(:segment)', 'DestinationController::detail/$1');

$routes->get('/id/hubungi-kami', 'ContactUsController::index');
$routes->get('/en/contact-us', 'ContactUsController::index');

$routes->get('/id/tentang-kami', 'AboutUsController::index');
$routes->get('/en/about-us', 'AboutUsController::index');

$routes->get('/id/faq', 'FAQController::index');
$routes->get('/en/faq', 'FAQController::index');

$routes->get('/id/blog', 'ArticleController::index');
$routes->get('/id/blog/(:segment)/(:segment)', 'ArticleController::detail/$1/$2');
$routes->get('/en/blog', 'ArticleController::index');
$routes->get('/en/blog/(:segment)/(:segment)', 'ArticleController::detail/$1/$2');

$routes->get('/id/layanan-kami', 'ServiceController::index');
$routes->get('/en/our-services', 'ServiceController::index');

$routes->get('/id/corporate-and-travel-agent', 'CorporateController::index');
$routes->get('/en/corporate-and-travel-agent', 'CorporateController::index');

$routes->get('/id/layanan-lainnya', 'OtherServicesController::index');
$routes->get('/en/other-services', 'OtherServicesController::index');

$routes->get('/id/layanan-kami/(:any)', 'ServiceController::detail/$1');
$routes->get('/en/our-services/(:any)', 'ServiceController::detail/$1');

$routes->get('/id/footer/(:any)', 'OtherFooterController::index/$1');
$routes->get('/en/footer/(:any)', 'OtherFooterController::index/$1');
// $routes->get('/en/footer/(:any)', 'OtherFooterController::detail/$1');


$routes->get('/id/events', 'EventsController::index');
$routes->get('/en/events', 'EventsController::index');

//admin

$routes->get('admin/login', 'admin\Auth::index');
$routes->post('admin/auth/process', 'admin\Auth::process');
$routes->get('admin/logout', 'admin\Auth::logout');
$routes->get('/dasboard', 'admin\Dashboard::index', ['filter' => 'auth']); // Apply the auth filter

$routes->get('/commitment', 'admin\Commitment::index');
$routes->get('/tambahCommitment', 'admin\Commitment::tambah');
$routes->post('/proses_tambah', 'admin\Commitment::proses_tambah');
$routes->get('/editCommitment/(:num)', 'admin\Commitment::edit/$1');
$routes->post('/proses_edit/(:num)', 'admin\Commitment::proses_edit/$1');
$routes->get('/delete/(:any)', 'admin\Commitment::delete/$1');

$routes->get('/FounderSosmed', 'admin\FounderSosmedctrl::index');
$routes->get('/tambahFounderSosmed', 'admin\FounderSosmedctrl::tambah');
$routes->post('/proses_tambah_FounderSosmed', 'admin\FounderSosmedctrl::proses_tambah');
$routes->get('/editFounderSosmed/(:num)', 'admin\FounderSosmedctrl::edit/$1');
$routes->post('/proses_edit_FounderSosmed/(:num)', 'admin\FounderSosmedctrl::proses_edit/$1');
$routes->get('/delete_FounderSosmed/(:any)', 'admin\FounderSosmedctrl::delete/$1');

$routes->get('/how_it_works', 'admin\HowItWorkctrl::index');
$routes->get('/tambahhow_it_works', 'admin\HowItWorkctrl::tambah');
$routes->post('/proses_tambah_how_it_works', 'admin\HowItWorkctrl::proses_tambah');
$routes->get('/edithow_it_works/(:num)', 'admin\HowItWorkctrl::edit/$1');
$routes->post('/proses_edit_how_it_works/(:num)', 'admin\HowItWorkctrl::proses_edit/$1');
$routes->get('/delete_how_it_works/(:any)', 'admin\HowItWorkctrl::delete/$1');

$routes->get('/SosialMedia', 'admin\SosialMediactrl::index');
$routes->get('/tambahSosialMedia', 'admin\SosialMediactrl::tambah');
$routes->post('/proses_tambah_SosialMedia', 'admin\SosialMediactrl::proses_tambah');
$routes->get('/editSosialMedia/(:num)', 'admin\SosialMediactrl::edit/$1');
$routes->post('/proses_edit_SosialMedia/(:num)', 'admin\SosialMediactrl::proses_edit/$1');
$routes->get('/delete_SosialMedia/(:any)', 'admin\SosialMediactrl::delete/$1');

$routes->get('/detail_corporate_agent', 'admin\DetailCorporateAgentctrl::index');
$routes->get('/tambahdetail_corporate_agent', 'admin\DetailCorporateAgentctrl::tambah');
$routes->post('/proses_tambah_detail_corporate_agent', 'admin\DetailCorporateAgentctrl::proses_tambah');
$routes->get('/editdetail_corporate_agent/(:num)', 'admin\DetailCorporateAgentctrl::edit/$1');
$routes->post('/proses_edit_detail_corporate_agent/(:num)', 'admin\DetailCorporateAgentctrl::proses_edit/$1');
$routes->get('/delete_detail_corporate_agent/(:any)', 'admin\DetailCorporateAgentctrl::delete/$1');

$routes->get('/Article', 'admin\Articlectrl::index');
$routes->get('/tambahArticle', 'admin\Articlectrl::tambah');
$routes->post('/proses_tambah_Article', 'admin\Articlectrl::proses_tambah');
$routes->get('/editArticle/(:num)', 'admin\Articlectrl::edit/$1');
$routes->post('/proses_edit_Article/(:num)', 'admin\Articlectrl::proses_edit/$1');
$routes->get('/delete_Article/(:any)', 'admin\Articlectrl::delete/$1');
?>
