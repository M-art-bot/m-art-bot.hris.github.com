<?php 

	class Info_model extends CI_Model
	{
		
		public function __construct()
		{
			$this->load->database();
		}

		public function update_info($data){

			$this->db->where('applicant_id', $data['applicant_id']);
			$this->db->update('applicants', $data);
	        return $this->db->affected_rows();
		}

		public function update_res($data){

			$this->db->where('res_id', $data['res_id']);
			$this->db->update('residential_address', $data);
	        return $this->db->affected_rows();
		}

		public function add_res($data)
	    {
	        $this->db->insert('residential_address', $data);
	        return $this->db->insert_id();
	    }

	    public function update_educ($data){

			$this->db->where('educational_backgrounds_id', $data['educational_backgrounds_id']);
			$this->db->update('educational_backgrounds', $data);
	        return $this->db->affected_rows();
		}

		public function add_educ($data)
	    {
	        $this->db->insert('educational_backgrounds', $data);
	        return $this->db->insert_id();
	    }

	    public function update_family($data){

			$this->db->where('family_id', $data['family_id']);
			$this->db->update('family_background', $data);
	        return $this->db->affected_rows();
		}

		public function add_family($data)
	    {
	        $this->db->insert('family_background', $data);
	        return $this->db->insert_id();
	    }

	    public function update_per($data){

			$this->db->where('per_id', $data['per_id']);
			$this->db->update('permanent_address', $data);
	        return $this->db->affected_rows();
		}

		public function add_per($data)
	    {
	        $this->db->insert('permanent_address', $data);
	        return $this->db->insert_id();
	    }

     	public function update_personal_informations($data){

			$this->db->where('personal_id', $data['personal_id']);
			$this->db->update('personal_informations', $data);
	        return $this->db->affected_rows();
		}

		public function add_personal_informations($data)
	    {
	        $this->db->insert('personal_informations', $data);
	        return $this->db->insert_id();
	    }

	    public function add_civil_informations($data = null)
	    {
	        $count_product = count($this->input->post('career_service'));

			for($x = 0; $x < $count_product; $x++) {

				$items = array(
							'civil_service' => $this->input->post('career_service')[$x],
							'rating' => $this->input->post('rating')[$x],
							'date_of_examination' => $this->input->post('date_of_examination')[$x],
							'place_of_examination' => $this->input->post('place_of_examination')[$x],
							'license_number' => $this->input->post('license_number')[$x],
							'date_of_validity' => $this->input->post('date_of_validity')[$x],
							'applicant_id' => $this->session->userdata['logged_in_user']['applicant_id']
						);

			$this->db->insert('civil_service_eligibility', $items);
				}

			return true;
	    }

	    public function update_civil_informations($data = null)
	    {
	        $count_product = count($this->input->post('career_service'));

			
			$this->db->where('applicant_id', $this->session->userdata['logged_in_user']['applicant_id']);
			$this->db->delete('civil_service_eligibility');

			for($y = 0; $y < $count_product; $y++) {

				$items = array(
						'civil_service' => $this->input->post('career_service')[$y],
						'rating' => $this->input->post('rating')[$y],
						'date_of_examination' => $this->input->post('date_of_examination')[$y],
						'place_of_examination' => $this->input->post('place_of_examination')[$y],
						'license_number' => $this->input->post('license_number')[$y],
						'date_of_validity' => $this->input->post('date_of_validity')[$y],
						'applicant_id' => $this->session->userdata['logged_in_user']['applicant_id']
					);

				$this->db->insert('civil_service_eligibility', $items);
			}
			return true;

		}


	}
?>


		