<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Routes for language switching
$routes->get('lang/(:segment)', 'Language::switch/$1');



//  default language: id-ID
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
$routes->get('/id/blog/(:segment)', 'ArticleController::detail/$1');
$routes->get('/en/blog', 'ArticleController::index');
$routes->get('/en/blog/(:segment)', 'ArticleController::detail/$1');

$routes->get('/id/layanan-kami', 'ServiceController::index');
$routes->get('/en/our-services', 'ServiceController::index');

$routes->get('/id/corporate-and-travel-agent', 'CorporateController::index');
$routes->get('/en/corporate-and-travel-agent', 'CorporateController::index');

$routes->get('/id/layanan-lainnya', 'OtherServicesController::index');
$routes->get('/en/other-services', 'OtherServicesController::index');

$routes->get('/en/our-services/destination-event', 'ServiceController::mice');
$routes->get('/id/layanan-kami/destination-event', 'ServiceController::mice');

$routes->get('/id/layanan-kami/private-tour', 'ServiceController::privatetour');
$routes->get('/en/our-services/private-tour', 'ServiceController::privatetour');

$routes->get('/id/layanan-kami/tour-agent', 'ServiceController::touragent');
$routes->get('/en/our-services/tour-agent', 'ServiceController::touragent');

$routes->get('/id/layanan-kami/vip-services', 'ServiceController::vip');
$routes->get('/en/our-services/vip-services', 'ServiceController::vip');



$routes->get('/id/footer/(:any)', 'OtherFooterController::index/$1');
$routes->get('/en/footer/(:any)', 'OtherFooterController::index/$1');
// $routes->get('/en/footer/(:any)', 'OtherFooterController::detail/$1');


$routes->get('/id/events', 'EventsController::index');
$routes->get('/en/events', 'EventsController::index');

$routes->get('/en/sitemap', 'Sitemapctrl::index');
$routes->get('/id/sitemap', 'Sitemapctrl::index');

//admin
// Define your routes
$routes->get('login', 'admin\Loginctrl::index');
$routes->post('login/process', 'admin\Loginctrl::process');
$routes->get('logout', 'admin\Loginctrl::logout');

$routes->group('', ['filter' => 'auth'], function($routes) {
// Define route for admin dashboard
$routes->get('admin/dashboard', 'admin\Dashboard::index');

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

$routes->get('/article', 'admin\Articlectrl::index');
$routes->get('/tambahArticle', 'admin\Articlectrl::tambah');
$routes->post('/proses_tambah_Article', 'admin\Articlectrl::proses_tambah');
$routes->get('/editArticle/(:num)', 'admin\Articlectrl::edit/$1');
$routes->post('/proses_edit_Article/(:num)', 'admin\Articlectrl::proses_edit/$1');
$routes->get('/delete_Article/(:any)', 'admin\Articlectrl::delete/$1');

$routes->get('/image_articles', 'admin\ImageArticlectrl::index');
$routes->get('/tambahimage_articles', 'admin\ImageArticlectrl::tambah');
$routes->post('/proses_tambah_image_articles', 'admin\ImageArticlectrl::proses_tambah');
$routes->get('/editimage_articles/(:num)', 'admin\ImageArticlectrl::edit/$1');
$routes->post('/proses_edit_image_articles/(:num)', 'admin\ImageArticlectrl::proses_edit/$1');
$routes->get('/delete_image_articles/(:any)', 'admin\ImageArticlectrl::delete/$1');

$routes->get('/faq/index', 'admin\FAQController::index');
$routes->get('/faq/tambah', 'admin\FAQController::tambah');
$routes->post('/faq/proses_tambah', 'admin\FAQController::proses_tambah');
$routes->get('/faq/edit/(:num)', 'admin\FAQController::edit/$1');
$routes->put('/faq/proses_edit/(:num)', 'admin\FAQController::proses_edit/$1');
$routes->get('/faq/delete/(:num)', 'admin\FAQController::delete/$1');

$routes->get('/faqC/index', 'admin\FaqC::index');
$routes->get('/faqC/tambah', 'admin\FaqC::tambah');
$routes->post('/faqC/proses_tambah', 'admin\FaqC::proses_tambah');
$routes->get('/faqC/edit/(:num)', 'admin\FaqC::edit/$1');
$routes->post('/faqC/proses_edit/(:num)', 'admin\FaqC::proses_edit/$1');
$routes->get('/faqC/delete/(:num)', 'admin\FaqC::delete/$1');

$routes->get('/testimonial/index', 'admin\Testimonialctrl::index');
$routes->get('/testimonial/tambah', 'admin\Testimonialctrl::tambah');
$routes->post('/testimonial/proses_tambah', 'admin\Testimonialctrl::proses_tambah');
$routes->get('/testimonial/edit/(:num)', 'admin\Testimonialctrl::edit/$1');
$routes->post('/testimonial/proses_edit/(:num)', 'admin\Testimonialctrl::proses_edit/$1');
$routes->get('/testimonial/delete/(:num)', 'admin\Testimonialctrl::delete/$1');


$routes->get('/usp/index', 'admin\Usp::index');
$routes->get('/usp/tambah', 'admin\Usp::tambah');
$routes->post('/usp/proses_tambah', 'admin\Usp::proses_tambah');
$routes->get('/usp/edit/(:num)', 'admin\Usp::edit/$1');
$routes->post('/usp/proses_edit/(:num)', 'admin\Usp::proses_edit/$1');
$routes->get('/usp/delete/(:num)', 'admin\Usp::delete/$1');
});

// Page not found handler
$routes->set404Override('App\Controllers\ErrorController::show404');