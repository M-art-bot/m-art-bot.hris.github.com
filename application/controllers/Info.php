<?php
	
	class Info extends CI_Controller
	{
		
		public function basic_update(){

			$update_basic_information	=	array('first_name' => $this->input->post('first_name'),
													'middle_name' => $this->input->post('middle_name'),
													'last_name' => $this->input->post('last_name'),
													'extension_name' => $this->input->post('extension_name'),
													'email_address' => $this->input->post('email_address'),
													'date_of_birth' => $this->input->post('date_of_birth'),
													'place_of_birth' => $this->input->post('place_of_birth'),
													'gender' => $this->input->post('gender'),
													'civil_status' => $this->input->post('civil_status'),
													'citizenship' => $this->input->post('citizenship'),
													'telephone_no' => $this->input->post('telephone_no'),
													'mobile_no' => $this->input->post('mobile_no'),
													'applicant_id'	=> $this->input->post('applicant_id')
											);

			$success	= 	$this->Info_model->update_info($update_basic_information);

		
			$this->session->set_flashdata('success', 'Successfully updated.');
      		redirect('candidates-dashboard');
			


		}


		public function fam_update(){

			$update_fam_information	=	array(	
													'spouse_last_name' => $this->input->post('spouse_last_name'),
													'spouse_first_name' => $this->input->post('spouse_first_name'),
													'spouse_middle_name' => $this->input->post('spouse_middle_name'),
													'spouse_extension_name' => $this->input->post('spouse_extension_name'),
													'occupation' => $this->input->post('occupation'),
													'company_name' => $this->input->post('company_name'),
													'company_address' => $this->input->post('company_address'),
													'company_tel_no'	=> $this->input->post('company_tel_no'),
													'fathers_last_name' => $this->input->post('fathers_last_name'),
													'fathers_first_name' => $this->input->post('fathers_first_name'),
													'fathers_middle_name' => $this->input->post('fathers_middle_name'),
													'fathers_extension_name' => $this->input->post('fathers_extension_name'),
													'mothers_last_name' => $this->input->post('mothers_last_name'),
													'mothers_first_name' => $this->input->post('mothers_first_name'),
													'mothers_middle_name' => $this->input->post('mothers_middle_name'),
													'mothers_maiden_name' => $this->input->post('mothers_maiden_name'),
													'family_id'	=> $this->input->post('family_id')
											);

			$success	= 	$this->Info_model->update_family($update_fam_information);

		
			$this->session->set_flashdata('success_fam', 'Successfully updated.');
      		redirect('candidates-family');
			


		}

		public function fam_add(){

			$add_fam_information	=	array(	
													'spouse_last_name' => $this->input->post('spouse_last_name'),
													'spouse_first_name' => $this->input->post('spouse_first_name'),
													'spouse_middle_name' => $this->input->post('spouse_middle_name'),
													'spouse_extension_name' => $this->input->post('spouse_extension_name'),
													'occupation' => $this->input->post('occupation'),
													'company_name' => $this->input->post('company_name'),
													'company_address' => $this->input->post('company_address'),
													'company_tel_no'	=> $this->input->post('company_tel_no'),
													'fathers_last_name' => $this->input->post('fathers_last_name'),
													'fathers_first_name' => $this->input->post('fathers_first_name'),
													'fathers_middle_name' => $this->input->post('fathers_middle_name'),
													'fathers_extension_name' => $this->input->post('fathers_extension_name'),
													'mothers_last_name' => $this->input->post('mothers_last_name'),
													'mothers_first_name' => $this->input->post('mothers_first_name'),
													'mothers_middle_name' => $this->input->post('mothers_middle_name'),
													'mothers_maiden_name' => $this->input->post('mothers_maiden_name'),
													'applicant_id'	=> $this->input->post('applicant_id')
											);

			$success	= 	$this->Info_model->add_family($add_fam_information);

		
			$this->session->set_flashdata('success_add_fam', 'Successfully Added.');
      		redirect('candidates-family');
			

		}

		public function educ_add(){

			$add_educ_information	=	array(	
													'es_name' => $this->input->post('es_name'),
													'es_year' => $this->input->post('es_year'),
													'secondary_name' => $this->input->post('secondary_name'),
													'secondary_year' => $this->input->post('secondary_year'),
													'voc_name' => $this->input->post('voc_name'),
													'voc_year' => $this->input->post('voc_year'),
													'college_name' => $this->input->post('college_name'),
													'college_year'	=> $this->input->post('college_year'),
													'grad_name' => $this->input->post('grad_name'),
													'grad_year' => $this->input->post('grad_year'),
													'applicant_id'	=> $this->input->post('applicant_id')
											);

			$success	= 	$this->Info_model->add_educ($add_educ_information);

		
			$this->session->set_flashdata('success_educ_add', 'Successfully Added.');
      		redirect('candidates-education');
			

		}

		public function educ_update(){

			$update_educ_information	=	array(	
													'es_name' => $this->input->post('es_name'),
													'es_year' => $this->input->post('es_year'),
													'secondary_name' => $this->input->post('secondary_name'),
													'secondary_year' => $this->input->post('secondary_year'),
													'voc_name' => $this->input->post('voc_name'),
													'voc_year' => $this->input->post('voc_year'),
													'college_name' => $this->input->post('college_name'),
													'college_year'	=> $this->input->post('college_year'),
													'grad_name' => $this->input->post('grad_name'),
													'grad_year' => $this->input->post('grad_year'),
													'educational_backgrounds_id'	=> $this->input->post('educational_backgrounds_id')
											);

			$success	= 	$this->Info_model->update_educ($update_educ_information);

		
			$this->session->set_flashdata('success_educ', 'Successfully updated.');
      		redirect('candidates-education');
			

		}


		public function res_update(){

			$update_res_information	=	array(	
													'res_lot_no' => $this->input->post('res_lot_no'),
													'res_street' => $this->input->post('res_street'),
													'res_subdivision' => $this->input->post('res_subdivision'),
													'res_brgy' => $this->input->post('res_brgy'),
													'res_city' => $this->input->post('res_city'),
													'res_prov' => $this->input->post('res_prov'),
													'res_zip' => $this->input->post('res_zip'),
													'res_id'	=> $this->input->post('res_id')
											);

			$success	= 	$this->Info_model->update_res($update_res_information);

		
			$this->session->set_flashdata('success_res', 'Successfully updated.');
      		redirect('candidates-dashboard');
			


		}

		public function res_add(){

			$add_res_information	=	array(	
													'res_lot_no' => $this->input->post('res_lot_no'),
													'res_street' => $this->input->post('res_street'),
													'res_subdivision' => $this->input->post('res_subdivision'),
													'res_brgy' => $this->input->post('res_brgy'),
													'res_city' => $this->input->post('res_city'),
													'res_prov' => $this->input->post('res_prov'),
													'res_zip' => $this->input->post('res_zip'),
													'applicant_id'	=> $this->input->post('applicant_id')
											);

			$success	= 	$this->Info_model->add_res($add_res_information);

		
			$this->session->set_flashdata('success_add', 'Successfully Added.');
      		redirect('candidates-dashboard');
			


		}

		public function per_update(){

			$update_per_information	=	array(	
													'per_lot_no' => $this->input->post('per_lot_no'),
													'per_street' => $this->input->post('per_street'),
													'per_subdivision' => $this->input->post('per_subdivision'),
													'per_brgy' => $this->input->post('per_brgy'),
													'per_city' => $this->input->post('per_city'),
													'per_prov' => $this->input->post('per_prov'),
													'per_zip' => $this->input->post('per_zip'),
													'per_id'	=> $this->input->post('per_id')
											);

			$success	= 	$this->Info_model->update_per($update_per_information);

		
			$this->session->set_flashdata('success_per', 'Successfully updated.');
      		redirect('candidates-dashboard');
			


		}

		public function per_add(){

			$add_per_information	=	array(	
													'per_lot_no' => $this->input->post('per_lot_no'),
													'per_street' => $this->input->post('per_street'),
													'per_subdivision' => $this->input->post('per_subdivision'),
													'per_brgy' => $this->input->post('per_brgy'),
													'per_city' => $this->input->post('per_city'),
													'per_prov' => $this->input->post('per_prov'),
													'per_zip' => $this->input->post('per_zip'),
													'applicant_id'	=> $this->input->post('applicant_id')
											);

			$success	= 	$this->Info_model->add_per($add_per_information);

		
			$this->session->set_flashdata('success_add_per', 'Successfully Added.');
      		redirect('candidates-dashboard');
			


		}

		public function update_other(){

			$update_personal_information	=	array(	
													'height' => $this->input->post('height'),
													'weight' => $this->input->post('weight'),
													'blood_type' => $this->input->post('blood_type'),
													'gsis' => $this->input->post('gsis'),
													'pagibig' => $this->input->post('pagibig'),
													'philhealth' => $this->input->post('philhealth'),
													'sss' => $this->input->post('sss'),
													'tin'	=> $this->input->post('tin'),
													'employee_no'	=> $this->input->post('employee_no'),
													'personal_id'	=> $this->input->post('personal_id')

											);

			$success	= 	$this->Info_model->update_personal_informations($update_personal_information);

		
			$this->session->set_flashdata('success_personal', 'Successfully updated.');
      		redirect('candidates-dashboard');
			


		}

		public function add_other(){

			$add_personal_information	=	array(	
													'height' => $this->input->post('height'),
													'weight' => $this->input->post('weight'),
													'blood_type' => $this->input->post('blood_type'),
													'gsis' => $this->input->post('gsis'),
													'pagibig' => $this->input->post('pagibig'),
													'philhealth' => $this->input->post('philhealth'),
													'sss' => $this->input->post('sss'),
													'tin'	=> $this->input->post('tin'),
													'employee_no'	=> $this->input->post('employee_no'),
													'applicant_id'	=> $this->input->post('applicant_id')
											);

			$success	= 	$this->Info_model->add_personal_informations($add_personal_information);

		
			$this->session->set_flashdata('success_add_personal', 'Successfully Added.');
      		redirect('candidates-dashboard');
			


		}

		public function civil_add(){
			
			
			$civil_id	= $this->Info_model->add_civil_informations();
	        	
	    	
    		$this->session->set_flashdata('success_add_civil', 'Successfully Added.');
    		redirect('candidates-civil');
	    	
	    	
		}

		public function civil_update(){
			
			
			$civil_id	= $this->Info_model->update_civil_informations();
	        	
	    	
    		$this->session->set_flashdata('success_civil', 'Successfully Updates.');
    		redirect('candidates-civil');
	    	
	    	
		}
	}

?>