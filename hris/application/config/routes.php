<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Administrator Dashboard
$route['administrator-dashboard']		= 'Dashboard/index';
// Administrator Recruitment
$route['administrator-recruitment']		= 'Recruitment/index';



$route['administrator-login']			= 'Administrator/index';

$route['default_controller'] 		= 'welcome'; 

$route['404_override'] 				= '';

$route['translate_uri_dashes'] 		= FALSE;

