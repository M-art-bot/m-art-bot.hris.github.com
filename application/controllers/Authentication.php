<?php 
	
	class Authentication extends CI_Controller
	{
		
		public function login(){
			$data = array(
							'username' => $this->input->post('username'),
							'password' => md5($this->input->post('password'))
					);


			$result =$this->Authentication_model->login($data);

			if ($result == TRUE) {

				$username = $this->input->post('username');
				$result = $this->Authentication_model->read_user_information($username);

				if ($result != false) {
					$session_data = array(
					'username' => $result[0]->username,
					'userid'   => $result[0]->user_id
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					redirect('administrator-dashboard');
				}
			
		} else {
					$data = array(
					'error_message' => 'Invalid Username or Password'
					);
					redirect('administrator-login');
					}
		}

		public function logout() {
	
			$sess_array = array(
			'userid' => ''
			);

			$this->session->unset_userdata('logged_in', $sess_array);
			redirect('administrator-login');
		}

		public function userslogout() {
	
			$sess_array = array(
			'applicant_id' => ''
			);

			$this->session->unset_userdata('logged_in_user', $sess_array);
			redirect('users-login');
		}


		public function register()
		{	
			$first_name 		=  		$this->input->post('first_name');
			$last_name 			= 		$this->input->post('last_name');
			$email_address 		=	 	$this->input->post('email_address');
			$password 			= 		md5($this->input->post('password'));


			$candidates 		= 		array(

												'first_name'	=>	$first_name,
												'last_name'		=>	$last_name,
												'email_address'	=>	$email_address,
												'password'		=>	$password,

										);


			// Evaluate Email Address is duplicate.
			$validated			=		$this->Users_model->validate_email($candidates);

			// If validated the email

			if($validated){

				// The candidates array should be query in to Model. Name it to Users_model to login function.

				$successfull 	= 		$this->Users_model->register($candidates);

				// If success login

				if($successfull){

					$this->session->set_flashdata('success', 'Your account has been activated successfully. You can now login.');
			      	redirect('users-login');

				}

			}

			// If not valideted the email

			$this->session->set_flashdata('duplicated', 'Your email has already exists. Please try again.');
	      	redirect('users-registration');								

		}

		public function login_2(){

		$page = 'candidates-dashboard';

		// Get data from users
		$candidate_email_address 		= $this->input->post('candidate_email_address');
		$candidate_password 			= md5($this->input->post('candidate_password'));

		// Insert to array
		$candidate_credentials		 	= array(
													'email_address' 			=> 	$candidate_email_address,
													'password'				=>	$candidate_password
										);

		$result 					= $this->Users_model->login($candidate_credentials);
		
		if ($result == TRUE) {

				$email_address = $this->input->post('candidate_email_address');
				$result = $this->Users_model->read_user_information($email_address);

				if ($result != false) {
					$session_data = array(
					'email_address' => $result[0]->email_address,
					'applicantid'   => $result[0]->applicant_id
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					redirect('candidates-dashboard');
				}
			
		} else {
					$data = array(
					'error_message' => 'Invalid Username or Password'
					);
					redirect('users-login');
					}
		

	}
		
	}

?>	