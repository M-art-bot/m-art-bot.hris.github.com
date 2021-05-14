<?php
	
	class Enlists_model extends CI_Model
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		var $table = 'applicants';
	    var $column_order = array('first_name','rate',null);
	    var $column_search = array('first_name','rate');
	    var $order = array('rate' => 'desc');



		public function get($id){
			

		
	        $this->db->from('applicants');
	      
	 		$this->db->where('action_id', $id);
	 		
	 		$query = $this->db->get();
	        return $query->row_array();
			
			
		}

		 public function get_datatables($id, $id_2)
	    {
	        $this->_get_datatables_query($id, $id_2);
	        if($_POST['length'] != -1)
	        $this->db->limit($_POST['length'], $_POST['start']);
	        $query = $this->db->get();
	        return $query->result();

	    }

	    private function _get_datatables_query($id =null, $id_2=null)
	    {
	        
	        $this->db->from($this->table);
	      	$this->db->where('job_id', $id);
			$this->db->where('action_id', $id_2);

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

	    public function count_filtered($id =null, $id_2=null)
	    {
	        $this->_get_datatables_query($id, $id_2);
	        $query = $this->db->get();
	        return $query->num_rows();
	    }
	 
	    public function count_all($id =null, $id_2=null)
	    {
	        $this->db->from($this->table);
	        $this->db->where('job_id', $id);
			$this->db->where('action_id', $id_2);
	        return $this->db->count_all_results();
	    }
	 

		

			
	

	}


?>