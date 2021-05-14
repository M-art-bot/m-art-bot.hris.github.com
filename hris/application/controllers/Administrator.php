<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	
	public function index()
	{	
		

		$data['title']			= 	"Administrator | Login";
		$data['system_name']	=	"HRIS";

		$this->load->view('administrator/forms/templates/header', $data);
		$this->load->view('administrator/forms/login', $data);
		$this->load->view('administrator/forms/templates/footer', $data);
	}
}
