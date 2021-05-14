<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Candidates
$route['candidates-dashboard']				= 'Jobs/dashboard';
$route['candidates-family']					= 'Jobs/family';
$route['candidates-education']				= 'Jobs/education';
$route['candidates-civil']					= 'Jobs/civil';

// USERS
$route['users-employers-login'] 	= 'Users/employers_login';
$route['users-registration'] 		= 'Jobs/sign_up';
$route['users-login']  				= 'Jobs/index';
$route['users-logout']				= 'Users/logout';


// Administrator Dashboard
$route['administrator-dashboard']		= 'Dashboard/index';
// Administrator Recruitment
$route['administrator-recruitment']		= 'Recruitment/index';

// Administrator Candidates
$route['administrator-candidates/(:any)']		= 'Candidates/index/$1';

// Administrator Candidates
$route['administrator-candidates-basic-information/(:any)']		= 'Basic_information/index/$1';

// Administrator Candidates Enlist
$route['administrator-enlists-candidates/(:any)/(:any)']	= 'Enlists/index/$1/$2';

// Administrator Personnel
$route['administrator-personnel/(:any)']		=	'Personnel/index/$1';

$route['administrator-login']			= 'Administrator/index';

$route['default_controller'] 		= 'jobs'; 

$route['404_override'] 				= '';

$route['translate_uri_dashes'] 		= FALSE;

