<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# ADMIN
$route['admin/login']                   = 'admin/index/login';
$route['admin/logout']                  = 'admin/index/logout';
$route['admin/meta-info']               = 'admin/Meta_info/index';
$route['admin/meta-info/manage']        = 'admin/Meta_info/manage';
$route['admin/meta-info/manage/(:any)'] = 'admin/Meta_info/manage/$1';
$route['admin/meta-info/delete/(:any)'] = 'admin/Meta_info/delete/$1';

# SITE PAGES
$route['about-us']             = 'pages/about';
$route['services']             = 'pages/services';
$route['opportunities']        = 'pages/opportunities';
$route['contact-us']           = 'pages/contact';
$route['newsletter']           = 'index/newsletter';

# API ROUTES
$route['api/home']                      = 'api/pages/home';
$route['api/privacy-policy']            = 'api/pages/privacy_policy';
$route['api/terms-and-conditions']      = 'api/pages/terms_and_conditions';
$route['api/disclaimer']                = 'api/pages/disclaimer';
$route['api/faqs']                      = 'api/pages/faqs';
$route['api/about-us']                  = 'api/pages/about_us';
$route['api/blogs/(:any)']              = 'api/pages/blogs/$1';
$route['api/blog-detail/(:any)']        = 'api/pages/blog_detail/$1';
$route['api/jobs']                      = 'api/pages/jobs';
$route['api/job-detail/(:any)']         = 'api/pages/job_detail/$1';
$route['api/fetch-jobs-data']           = 'api/pages/fetch_jobs_data';
$route['api/contact-us']                = 'api/pages/contact_us';
$route['api/save-contact-message']      = 'api/pages/save_contact_message';
$route['api/subs-newsletter']           = 'api/pages/subs_newsletter';
