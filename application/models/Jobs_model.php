<?php
	
	class Jobs_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function get_by_id($id){
		

			$this->db->select('*');
			$this->db->from('jobs');
			$this->db->where('job_id', $id);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

		public function get(){
		

			$this->db->select('*');
			$this->db->from('jobs');
			$this->db->limit(1);
			$query = $this->db->get();

			
			return $query->result_array();
			
		}

		public function gets($applicant_id){
			$condition = "applicant_id =" . "'" . $applicant_id . "'";

			$this->db->select('*');
			$this->db->from('applicants');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

		public function get_resident_address($applicant_id){
			$condition = "applicant_id =" . "'" . $applicant_id . "'";

			$this->db->select('*');
			$this->db->from('residential_address');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

		public function get_educ($applicant_id){
			$condition = "applicant_id =" . "'" . $applicant_id . "'";

			$this->db->select('*');
			$this->db->from('educational_backgrounds');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}


		
		public function get_permanent_address($applicant_id){
			$condition = "applicant_id =" . "'" . $applicant_id . "'";

			$this->db->select('*');
			$this->db->from('permanent_address');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

		public function get_personal_informations($applicant_id){
			$condition = "applicant_id =" . "'" . $applicant_id . "'";

			$this->db->select('*');
			$this->db->from('personal_informations');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

		public function get_family($applicant_id){
			$condition = "applicant_id =" . "'" . $applicant_id . "'";

			$this->db->select('*');
			$this->db->from('family_background');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

		public function get_civil($applicant_id){
			$sql = "SELECT * FROM  civil_service_eligibility WHERE  applicant_id = ?";
			$query = $this->db->query($sql, array($applicant_id));
			return $query->result_array();
		}
		public function login($data){
			$condition = "email_address =" . "'" . $data['email_address'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from('applicants');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return true;
			} else {
			return false;
			}
		}

		public function read_user_information($email_address) {

			$condition = "email_address =" . "'" . $email_address . "'";
			$this->db->select('*');
			$this->db->from('applicants');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->result();
			} else {
			return false;
			}
			

		}

	}


?>