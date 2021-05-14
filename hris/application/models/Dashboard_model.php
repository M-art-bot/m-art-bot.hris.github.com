<?php
	
	class Dashboard_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function get($user_id){
			$condition = "user_id =" . "'" . $user_id . "'";

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();

			if ($query->num_rows() == 1) {
			return $query->row_array();
			} else {
			return false;
			}
			
		}

	}


?>