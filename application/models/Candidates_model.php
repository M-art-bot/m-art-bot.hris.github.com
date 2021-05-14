<?php
	class Candidates_model extends CI_Model
	{
		
		var $table = 'applicants';
	    var $column_order = array('first_name','rate',null);
	    var $column_search = array('first_name','rate');
	    var $order = array('rate' => 'desc');

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

	    public function get_datatables($id)
	    {
	        $this->_get_datatables_query($id);
	        if($_POST['length'] != -1)
	        $this->db->limit($_POST['length'], $_POST['start']);
	        $query = $this->db->get();
	        return $query->result();

	    }

	    private function _get_datatables_query($id = null)
	    {
	        
	        $this->db->from($this->table);
	      	$this->db->where('job_id', $id);
	

	        $i = 0;
	     
	        foreach ($this->column_search as $item) // loop column 
	        {
	            if($_POST['search']['value']) // if datatable send POST for search
	            {
	                 
	                if($i===0) // first loop
	                {
	                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
	                    $this->db->like($item, $_POST['search']['value']);
	                }
	                else
	                {
	                    $this->db->or_like($item, $_POST['search']['value']);
	                }
	 
	                if(count($this->column_search) - 1 == $i) //last loop
	                    $this->db->group_end(); //close bracket
	            }
	            $i++;
	        }
	         
	        if(isset($_POST['order'])) // here order processing
	        {
	            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
	        } 
	        else if(isset($this->order))
	        {
	            $order = $this->order;
	            $this->db->order_by(key($order), $order[key($order)]);
	        }
	    }

	    public function count_filtered($id)
	    {
	        $this->_get_datatables_query($id);
	        $query = $this->db->get();
	        return $query->num_rows();
	    }
	 
	    public function count_all($id)
	    {
	        $this->db->from($this->table);
	        return $this->db->count_all_results();
	    }
	 
	    public function get_by_id($id)
	    {
	        $this->db->from($this->table);
	        $this->db->join('id_cards', 'id_cards.applicant_id = applicants.applicant_id');
	        $this->db->join('contact_informations', 'contact_informations.applicant_id = applicants.applicant_id');
          	$this->db->join('address_informations', 'address_informations.applicant_id = applicants.applicant_id');
      		$this->db->join('educational_backgrounds', 'educational_backgrounds.applicant_id = applicants.applicant_id');
	        $this->db->where('applicants.applicant_id',$id);
	        $query = $this->db->get();
	 
	        return $query->row();
	    }

	    public function update($where, $data)
	    {
	        $this->db->update($this->table, $data, $where);
	        return $this->db->affected_rows();
	    }
	 
	    public function delete_by_id($id)
	    {
	        $this->db->where('applicant_id', $id);
	        $this->db->delete($this->table);
	    }
			
		
	}
?>