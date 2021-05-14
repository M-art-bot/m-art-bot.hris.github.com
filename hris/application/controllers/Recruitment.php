<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Recruitment extends CI_Controller
	{
		
		public function index(){

			if($this->session->userdata['logged_in']['userid'])

			{
				$data['title']			= 	"Administrator | Recruitment";
				$data['system_name']	=	"HRIS";
				$data['page']			=	"Recruitment";

				$user_id				= 	$this->session->userdata['logged_in']['userid'];
											
				$data['credentials']	=	$this->Dashboard_model->get($user_id);

				$this->load->view('administrator/panel/templates/header', $data);
				$this->load->view('administrator/panel/templates/aside', $data);
				$this->load->view('administrator/panel/templates/navbar', $data);
				$this->load->view('administrator/panel/recruitment', $data);
				$this->load->view('administrator/panel/templates/subfooter', $data);
				$this->load->view('administrator/panel/templates/footer', $data);

			}

			else{
				redirect('administrator-login');
			}
		}

		public function ajax_add()
				$this->load->view('administrator/panel/templates/header', $data);
				$this->load->view('administrator/panel/templates/aside', $data);
				$this->load->view('administrator/panel/templates/navbar', $data);
				$this->load->view('administrator/panel/recruitment', $data);
				$this->load->view('administrator/panel/templates/subfooter', $data);
				$this->load->view('administrator/panel/templates/footer', $data);
	}

?>