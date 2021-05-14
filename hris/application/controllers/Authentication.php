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
					$this->load->view('login_form', $data);
					}
		}

		public function logout() {
	
			$sess_array = array(
			'userid' => ''
			);

			$this->session->unset_userdata('logged_in', $sess_array);
			redirect('administrator-login');
		}
		
	}

?>	