<?php
	class Activity_model extends CI_Model
	{
		
		var $table = 'activities';
	  

		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function save($data)
	    {
	        $this->db->insert($this->table, $data);
	        return $this->db->insert_id();
	    }

			
		
	}
?>