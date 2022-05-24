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
$route['api/what-is-human-trafficking'] = 'api/pages/what_is_human_traffiking';
$route['api/what-is-sex-trafficking']   = 'api/pages/what_is_sex_traffiking';
$route['api/facts-and-statistics']      = 'api/pages/fact_and_stats';
$route['api/policy-and-legislation']    = 'api/pages/policy_and_legislation';
$route['api/corporate-partners']        = 'api/pages/corporate_partners';
$route['api/start-a-fundraiser']        = 'api/pages/start_a_fundraiser';
$route['api/help-and-resources']        = 'api/pages/help_and_resources';
$route['api/traffik-and-sex']           = 'api/pages/traffik_and_sex';
$route['api/national-directory']        = 'api/pages/national_directory';
$route['api/current-affairs']           = 'api/pages/current_affairs';
$route['api/rescue-stories']            = 'api/pages/rescue_stories';
$route['api/rescue-story-detail']       = 'api/pages/rescue_story_detail';
$route['api/blog-detail']               = 'api/pages/blog_detail';
$route['api/news-detail']               = 'api/pages/news_detail';
$route['api/share-story']               = 'api/pages/share_story';
$route['api/project-unite']             = 'api/pages/project_unit';
$route['api/contact-us']                = 'api/pages/contact_us';
$route['api/save-contact-message']      = 'api/pages/save_contact_message';
$route['api/our-sponsors']              = 'api/pages/our_sponsors';
$route['api/donate-now']                = 'api/pages/donate_now';
$route['api/donate-pay']                = 'api/pages/donate_pay_now';
$route['api/near-events']               = 'api/pages/events_near_you';
$route['api/search-nearby-events']      = 'api/pages/search_nearby_events';
$route['api/search-organizations']      = 'api/pages/search_organizations';
$route['api/clear-organizations-search']= 'api/pages/clear_organizations_search';