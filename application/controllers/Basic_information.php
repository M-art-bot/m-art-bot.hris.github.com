<?php 
	
	class Basic_information extends CI_Controller
	{


		public function index($id = null){

			if($this->session->userdata['logged_in']['userid'])

			{
				if($id)
				{
					$data['title']			= 	"Administrator | Recruitment";
					$data['system_name']	=	"HRIS";
					$data['page']			=	"Candidates Basic Information";

					$user_id				= 	$this->session->userdata['logged_in']['userid'];
												
					$data['credentials']	=	$this->Dashboard_model->get($user_id);
					
					// Get information of applicant
					$data['profile']		= 	$this->Candidates_model->get_by_id($id);
					
					
					$this->load->view('administrator/panel/templates/header', $data);
					$this->load->view('administrator/panel/templates/aside', $data);
					$this->load->view('administrator/panel/templates/navbar', $data);
					$this->load->view('administrator/panel/Basic_information', $data);
					$this->load->view('administrator/panel/templates/subfooter', $data);
					$this->load->view('administrator/panel/templates/footer', $data);
				}
			}

			else{
				redirect('administrator-login');
			}
		}

	}
?>