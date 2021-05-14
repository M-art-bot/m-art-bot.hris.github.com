<?php

	class Recruitment extends CI_Controller
	{
		
		public function index(){

			if($this->session->userdata['logged_in']['userid'])

			{
				$data['title']			= 	"Administrator | Recruitment";
				$data['system_name']	=	"HRIS";
				$data['page']			=	"Recruitment";

				$user_id				= 	$this->session->userdata['logged_in']['userid'];
											
				$data['credentials']	=	$this->Dashboard_model->get($user_id);

				$this->load->view('administrator/panel/templates/header', $data);
				$this->load->view('administrator/panel/templates/aside', $data);
				$this->load->view('administrator/panel/templates/navbar', $data);
				$this->load->view('administrator/panel/recruitment', $data);
				$this->load->view('administrator/panel/templates/subfooter', $data);
				$this->load->view('administrator/panel/templates/footer', $data);

			}

			else{
				redirect('administrator-login');
			}
		}

		public function ajax_add()
	    {
	        $data = array(
	                'job_title' => $this->input->post('job_title'),
	                'remote_job'	=> $this->input->post('remote_job'),
	                'employment_term'	=> $this->input->post('employment_term'),
	                'employment_type'	=> $this->input->post('employment_type'),
	                'pay_rate'	=> $this->input->post('pay_rate'),
	                'pay_rate_2'	=> $this->input->post('pay_rate_2'),
	                'job_description'	=> $this->input->post('job_description')
	            );
	        $insert = $this->Recruitment_model->save($data);
	        echo json_encode(array("status" => TRUE));
	    }

	    public function ajax_list()
	    {
	        $list = $this->Recruitment_model->get_datatables();
	        $data = array();
			$no = $_POST['start'];

	        foreach ($list as $job) {
	             $no++;
	            $row = array();
	            $row[] = $job->job_title;

	      		$row[] = '<span class="badge badge-sm bg-gradient-primary">'.$job->candidates.'</span>';
	            
	          
	          
	          			
	 
	            //add html for action
	            $row[] = '<a class="btn btn-sm btn-primary" href="'.base_url().'administrator-candidates/'.$job->job_id.'" title="View"><i class="fa fa-eye"></i> View</a>';
	 
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                        "recordsTotal" => $this->Recruitment_model->count_all(),
	                        "recordsFiltered" => $this->Recruitment_model->count_filtered(),
	                        "data" => $data,
	                );
	        //output to json format
	        echo json_encode($output);
	    }
	}

?>