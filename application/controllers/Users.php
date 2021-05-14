<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){

		parent::__construct();

		$this->load->library('session');


	}

	public function index()
	{	
		$data['title'] 			= 'HRIS';
		$data['system_name'] 	= 'HRIS';

	

		if($this->session->userdata('candidate_id')){
			redirect('candidates-dashboard/'. $this->session->userdata('candidate_id'));
		}

		$this->load->view('templates/header', $data);
		$templates				= 'templates/nav';
		$page  					= 'users/index';
		$this->load->view($templates, $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer');
	}

	public function login()
	{
		$data['title'] 			= 'Career Development Program';
		$data['system_name'] 	= 'Career Development Program';
		$data['page_title']		= 'Candidate Login';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		 $this->session->unset_userdata($this->session->userdata('is_candidate_logged_in'));
	     $this->session->sess_destroy();

	     redirect('users','refresh');
	}

	public function register()
	{
		$data['title'] 			= 'HRIS';
		$data['system_name'] 	= 'HRIS';
		$data['page_title']		= 'Candidate Sign Up';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('users/register', $data);
		$this->load->view('templates/footer');
	}

	public function employers_login()
	{
		$data['title'] 			= 'Career Development Program';
		$data['system_name'] 	= 'Career Development Program';
		$data['page_title']		= 'Employers Login';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('users/employers_login', $data);
		$this->load->view('templates/footer');
	}

	public function ajax_list()
	    {
	        $list = $this->Users_model->get_datatables();
	        $data = array();
			$no = $_POST['start'];

	        foreach ($list as $candidates) {
             	$no++;
	            $row = array();
             	$row[] = $no;
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                       "recordsTotal" => $this->Users_model->count_all(),
	                        "recordsFiltered" => $this->Userss_model->count_filtered(),
	                        "data" => $data,
                );
	           
	        //output to json format
	        echo json_encode($output);
	    }



}
