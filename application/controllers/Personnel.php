<?php 
	
	class Personnel extends CI_Controller
	{


		public function index($id = null){

			if($this->session->userdata['logged_in']['userid'])

			{
				if($id)
				{
					$data['title']			= 	"Administrator | Personnel";
					$data['system_name']	=	"HRIS";
					$data['page']			=	"On Board";

					$user_id				= 	$this->session->userdata['logged_in']['userid'];
												
					$data['credentials']	=	$this->Dashboard_model->get($user_id);

					$data['jobs']			=	$this->Jobs_model->get_by_id($id);

					$data['move']			= 	$this->Move_model->get();

					$data['move_list']		=	$this->Move_model->get_alls($id);

			
					$this->load->view('administrator/panel/templates/header', $data);
					$this->load->view('administrator/panel/templates/aside', $data);
					$this->load->view('administrator/panel/templates/navbar', $data);
					$this->load->view('administrator/panel/personnel', $data);
					$this->load->view('administrator/panel/templates/subfooter', $data);
					$this->load->view('administrator/panel/templates/footer', $data);
				}
			}

				else{
					redirect('administrator-login');
				}
		}

		public function ajax_list($id)
	    {
	        $list = $this->Personnel_model->get_datatables($id);
	        $data = array();
			$no = $_POST['start'];

	        foreach ($list as $candidates) {
             	$no++;
	            $row = array();
             	$row[] = $no;
	            $row[] = $candidates->first_name;

	            $star = ['<span class="fa fa-star"></span>','<span class="fa fa-star"></span>','<span class="fa fa-star"></span>','<span class="fa fa-star"></span>','<span class="fa fa-star"></span>','<span class="fa fa-star"></span>'];

	            $hehe = '';

	          	for ($x = 0; $x < $candidates->rate; $x++) {
	          		
  					$hehe .=  $star[$x];
				}

				$row[] = $hehe;
	          
	           
	            $row[] = '<a class="btn btn-sm btn-warning" href="'.base_url().'administrator-candidates-basic-information/'.$candidates->applicant_id.'" title="See Information">See Information <i class="fa fa-eye"></i> </a>';

	            		
	 
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                        "recordsTotal" => $this->Personnel_model->count_all($id),
	                        "recordsFiltered" => $this->Personnel_model->count_filtered($id),
	                        "data" => $data,
                );
	           
	        //output to json format
	        echo json_encode($output);
	    }

	    public function ajax_add()
	    {
	        $data = array(
	                'first_name' => $this->input->post('first_name'),
	            );
	        $insert = $this->Candidates_model->save($data);
	        echo json_encode(array("status" => TRUE));
	    }

	     public function ajax_edit($id)
	    {
	        $data = $this->Candidates_model->get_by_id($id);
	        echo json_encode($data);
	    }

	    public function ajax_update()
	    {
	        $data = array(
	                'action_id' => $this->input->post('action_id'),
	  			
	            );
	        $this->Candidates_model->update(array('applicant_id' => $this->input->post('applicant_id')), $data);
	        echo json_encode(array("status" => TRUE));
	    }

     	public function ajax_rate()
	    {
	        $data = array(
	                'rate' => $this->input->post('rate'),

	  			
	            );

	        $activity = array(
	                'activity' => $this->input->post('activity'),
	                'applicant_id' => $this->input->post('applicant_ids')

	  			
	            );

	        $this->Candidates_model->update(array('applicant_id' => $this->input->post('applicant_ids')), $data);
	        $this->Activity_model->save($activity);
	        echo json_encode(array("status" => TRUE));
	    }
 		

	}
?>