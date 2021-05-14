<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();
$autoload['libraries'] = array('database', 'session', 'form_validation', 'email' , 'upload', 'pagination');
$autoload['drivers'] = array('cache');
$autoload['helper'] = array('url', 'form', 'text', 'file');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('Administrator_model', 'Authentication_model', 'Dashboard_model');