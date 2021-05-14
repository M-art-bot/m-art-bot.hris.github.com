<?php
	
	class Move_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function get(){
			

			$this->db->from('actions');
			$query = $this->db->get();

	
			return $query->result_array();
			
			
		}

		public function get_alls($id = null){

			$this->db->select('actions.*, applicants.*, count(applicants.action_id) as status');
	        $this->db->from('actions');
	      
	 		$this->db->join('applicants', 'applicants.action_id = actions.action_id')->group_by('applicants.action_id');
	 		$this->db->where('applicants.job_id', $id);
	 		$query = $this->db->get();
	        return $query->result();
		}

	}


?>