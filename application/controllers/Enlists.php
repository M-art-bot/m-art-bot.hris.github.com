<?php 
	
	class Enlists extends CI_Controller
	{


		public function index($id = null, $id_2 = null){

			if($this->session->userdata['logged_in']['userid'])

			{
				if($id)
				{
					$data['title']			= 	"Administrator | Recruitment";
					$data['system_name']	=	"HRIS";
					$data['page']			=	"Candidates-Enlists";

					$user_id				= 	$this->session->userdata['logged_in']['userid'];
												
					$data['credentials']	=	$this->Dashboard_model->get($user_id);

					// Get the action id
					$data['jobs']			=	$this->Jobs_model->get_by_id($id_2);

					$data['move']			= 	$this->Move_model->get();

					$data['move_list']		=	$this->Move_model->get_alls($id_2);

					// Get the action id
					$data['enlists']		= 	$this->Enlists_model->get($id);
					
					$this->session->set_flashdata('item','<a class="text-center nav-link text-dark"'); 
					

					$this->load->view('administrator/panel/templates/header', $data);
					$this->load->view('administrator/panel/templates/aside', $data);
					$this->load->view('administrator/panel/templates/navbar', $data);
					$this->load->view('administrator/panel/enlists', $data);
					$this->load->view('administrator/panel/templates/subfooter', $data);
					$this->load->view('administrator/panel/templates/footer', $data);
				}
			}

				else{
					redirect('administrator-login');
				}
		}

		public function ajax_list($id = null, $id_2 = null)
	    {
	        $list = $this->Enlists_model->get_datatables($id, $id_2);
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
	            //add html for action
	            $row[] = 	'<a class="btn btn-sm btn-warning" href="javascript:void(0)" onclick="rate_to('.$candidates->applicant_id.')" title="Activity">Activity <i class="fa fa-edit"></i> </a> 

	            |<a class="btn btn-sm btn-warning" href="'.base_url().'administrator-candidates-basic-information/'.$candidates->applicant_id.'" title="Move to">More Details <i class="fa fa-eye"></i> </a> |
	            
	            			<a class="btn btn-sm btn-primary" href="javascript:void(0)" onclick="move_to('.$candidates->applicant_id.')" title="Move to">Move to <i class="fa fa-arrow-right"></i> </a>';
	 
	            $data[] = $row;
	        }
	 
	        $output = array(
	                        "draw" => $_POST['draw'],
	                        "recordsTotal" => $this->Enlists_model->count_all($id, $id_2),
	                        "recordsFiltered" => $this->Enlists_model->count_filtered($id, $id_2),
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