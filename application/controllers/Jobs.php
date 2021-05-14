<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	
	public function index()
	{	
		

		$data['title']			= 	"HRIS | Login";
		$data['system_name']	=	"HRIS";

		$this->load->view('administrator/forms/templates/header', $data);
		$this->load->view('administrator/forms/login_2', $data);
		$this->load->view('administrator/forms/templates/footer', $data);
	}

	public function login(){
		$data = array(
							'email_address' => $this->input->post('email_address'),
							'password' 		=> md5($this->input->post('password'))
					);


		$result =$this->Jobs_model->login($data);

		if ($result == TRUE) {

				$email_address = $this->input->post('email_address');
				$result = $this->Jobs_model->read_user_information($email_address);

				if ($result != false) {
					$session_data = array(
					'email_address' => $result[0]->email_address,
					'applicant_id'   => $result[0]->applicant_id
					);
					// Add user data in session
					$this->session->set_userdata('logged_in_user', $session_data);
					redirect('candidates-dashboard');
				}
		}
		else{
				echo $data['password
				'];
		}
	}

	public function sign_up()
	{	
		

		$data['title']			= 	"HRIS | Sign Up";
		$data['system_name']	=	"HRIS";

		$this->load->view('administrator/forms/templates/header', $data);
		$this->load->view('administrator/forms/sign_up', $data);
		$this->load->view('administrator/forms/templates/footer', $data);
	}

	public function sign_up_pro(){
		$data = array(		
							'last_name' => $this->input->post('last_name'),
							'first_name' => $this->input->post('first_name'),
							'middle_name' => $this->input->post('middle_name'),
							'email_address' => $this->input->post('email_address'),
							'password' 		=> md5($this->input->post('password'))
					);


		$validated			=		$this->Users_model->validate_email($data);

		if($validated){

				$successfull 	= 		$this->Users_model->register($data);
				$this->session->set_flashdata('success', 'Your account has been activated successfully. You can now login.');
		      	redirect('users-login');


		}
		else{
				$this->session->set_flashdata('failed', 'Error adding data.');
		      	redirect('users-registration');
		}

				$this->session->set_flashdata('failed', 'Your email has already exists. Please use another email address');
		      	redirect('users-registration');
	}

	public function dashboard(){
		if($this->session->userdata['logged_in_user']['applicant_id'])

		{
			$data['title']			= 	$this->session->userdata['logged_in_user']['email_address'].' | HRIS';
			$data['system_name']	=	"HRIS";
			$data['page']			=	"Profile";

			$applicant_id			= 	$this->session->userdata['logged_in_user']['applicant_id'];
										
			$data['credentials']	=	$this->Jobs_model->gets($applicant_id);


			$data['res']	=	$this->Jobs_model->get_resident_address($applicant_id);

			if($data['res']){
				$this->session->set_flashdata('form_res_id', 'yehey');
			}
			else{
				$this->session->set_flashdata('form_res', 'aww');
			}

			$data['per']	=	$this->Jobs_model->get_permanent_address($applicant_id);

			if($data['per']){
				$this->session->set_flashdata('form_per_id', 'yehey');
			}
			else{
				$this->session->set_flashdata('form_per', 'aww');
			}

			$data['other']	=	$this->Jobs_model->get_personal_informations($applicant_id);
			
			if($data['other']){
				$this->session->set_flashdata('form_personal_id', 'yehey');
			}
			else{
				$this->session->set_flashdata('form_personal', 'aww');
			}
			
			$this->load->view('vacancy/header', $data);
			$this->load->view('vacancy/aside', $data);
			$this->load->view('vacancy/navbar', $data);
			$this->load->view('vacancy/dashboard', $data);
			$this->load->view('vacancy/subfooter', $data);
			$this->load->view('vacancy/footer', $data);
		}

		else{

			redirect('users-login');
		
		}
	}

	public function family(){
		if($this->session->userdata['logged_in_user']['applicant_id'])

		{
			$data['title']			= 	$this->session->userdata['logged_in_user']['email_address'].' | HRIS';
			$data['system_name']	=	"HRIS";
			$data['page']			=	"Profile";

			$applicant_id			= 	$this->session->userdata['logged_in_user']['applicant_id'];
										
			$data['credentials']	=	$this->Jobs_model->gets($applicant_id);


			$data['family']	=	$this->Jobs_model->get_family($applicant_id);

			if($data['family']){
				$this->session->set_flashdata('form_fam_id', 'yehey');
			}
			else{
				$this->session->set_flashdata('form_fam', 'aww');
			}


			$this->load->view('vacancy/header', $data);
			$this->load->view('vacancy/aside', $data);
			$this->load->view('vacancy/navbar', $data);
			$this->load->view('vacancy/family_background', $data);
			$this->load->view('vacancy/subfooter', $data);
			$this->load->view('vacancy/footer', $data);
		}

		else{

			redirect('users-login');
		
		}
	}


	public function education(){
		if($this->session->userdata['logged_in_user']['applicant_id'])

		{
			$data['title']			= 	$this->session->userdata['logged_in_user']['email_address'].' | HRIS';
			$data['system_name']	=	"HRIS";
			$data['page']			=	"Profile";

			$applicant_id			= 	$this->session->userdata['logged_in_user']['applicant_id'];
										
			$data['credentials']	=	$this->Jobs_model->gets($applicant_id);


			$data['educ']	=	$this->Jobs_model->get_educ($applicant_id);

			if($data['educ']){
				$this->session->set_flashdata('form_educ_id', 'yehey');
			}
			else{
				$this->session->set_flashdata('form_educ', 'aww');
			}


			$this->load->view('vacancy/header', $data);
			$this->load->view('vacancy/aside', $data);
			$this->load->view('vacancy/navbar', $data);
			$this->load->view('vacancy/education', $data);
			$this->load->view('vacancy/subfooter', $data);
			$this->load->view('vacancy/footer', $data);
		}

		else{

			redirect('users-login');
		
		}
	}

	public function civil(){
		if($this->session->userdata['logged_in_user']['applicant_id'])

		{
			$data['title']			= 	$this->session->userdata['logged_in_user']['email_address'].' | HRIS';
			$data['system_name']	=	"HRIS";
			$data['page']			=	"Profile";

			$applicant_id			= 	$this->session->userdata['logged_in_user']['applicant_id'];
										
			$data['credentials']	=	$this->Jobs_model->gets($applicant_id);


			$data['civil']	=	$this->Jobs_model->get_civil($applicant_id);

			$result = array();

			foreach($data['civil'] as $k => $v) {
    			$result['order_item'][] = $v;
    		}

    		$data['order_data'] = $result;

    	

			if($data['civil']){
				$this->session->set_flashdata('form_civil_id', 'yehey');
			}
			else{
				$this->session->set_flashdata('form_civil', 'aww');
			}


			$this->load->view('vacancy/header', $data);
			$this->load->view('vacancy/aside', $data);
			$this->load->view('vacancy/navbar', $data);
			$this->load->view('vacancy/civil', $data);
			$this->load->view('vacancy/subfooter', $data);
			$this->load->view('vacancy/footer', $data);
		}

		else{

			redirect('users-login');
		
		}
	}


}
