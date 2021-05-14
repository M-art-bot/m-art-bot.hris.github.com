<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Users_model extends CI_Model
	{
		
		public function __construct(){

        	$this->load->database();

    	}

    	public function register($data){

    		$this->db->insert('applicants', $data);
    		return $this->db->insert_id();
    
    	}

        public function validate_email($data){

            $this->db->where('email_address', $data['email_address']);

            $query = $this->db->get('applicants');

            $count_row = $query->num_rows();

            if ($count_row > 0) {
                return FALSE;
            } else {
                return TRUE; 
            }
        }

        public function read_user_information($email_address) {

         
            $this->db->select('*');
            $this->db->from('applicants');
            $this->db->where('email_address', $email_address);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
            return $query->result();
            } else {
            return false;
            }
            

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

        var $table = 'applicants';
        var $column_order = array('first_name','rate',null);
        var $column_search = array('first_name','rate');
        var $order = array('rate' => 'desc');

         public function get_datatables()
        {
            $this->_get_datatables_query();
            if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
            $query = $this->db->get();
            return $query->result();

        }

        private function _get_datatables_query()
        {
            
            $this->db->from($this->table);
            

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

        public function count_filtered()
        {
            $this->_get_datatables_query();
            $query = $this->db->get();
            return $query->num_rows();
        }
     
        public function count_all()
        {
            $this->db->from($this->table);
            return $this->db->count_all_results();
        }
    }

?>