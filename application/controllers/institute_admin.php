<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class institute_admin extends CI_Controller {


    function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
		
    }


    public function session_data() {
        $this->load->library('session');
		$this->load->model('user_modification_model', 'umm');
		$this->load->model('add_institute_model', 'aim');
		$this->load->model('add_department_model', 'adm');
		
		if (!$this->session->userdata('user_name')) {
			redirect("login");
		}
    }

	public function edit_profile(){
		$this->session_data();
		$this->load->view('institute_admin/edit_profile');
	}
	
    public function update_profile(){
        $this->session_data();
        $this->load->model('profile_update_model', 'pum');
        $this->pum->update_profile_inst();
        redirect("institute_admin");
    }



    public function index() {
		
		$this->session_data();
       
		
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {
			$this->load->model('add_trainee_model', 'atm');
			$data['data'] = $this->atm->get_trainee_dashboard();
            $this->load->view('institute_admin/index',$data);
        }
    }
 //Department 

 public function add_department() {
	$this->session_data();

	$this->load->model('add_institute_model', 'aim');
	$data['data'] = $this->aim->get_institute();	 
	$this->load->view('institute_admin/add_department', $data);
}


public function save_department() {
   $this->session_data();
	  $this->load->model('add_department_model', 'adm'); 
   $this->adm->create_department();
   redirect("institute_admin/add_department");
}

public function department_list() {
	$this->session_data();
	$this->load->model('add_department_model', 'adm');
	$data['data']=$this->adm->get_department();
	
	$this->load->view('institute_admin/department_list', $data);
}

public function edit_department($id) {
	$this->session_data();

	$this->load->model('add_institute_model', 'aim');
	$data['dataa'] = $this->aim->get_institute();

	$this->load->model('add_department_model', 'adm');
	$data['data'] = $this->adm->get_department_id('department',$id);
	$this->load->view('institute_admin/edit_department', $data);

}

	public function update_department() {
	$this->session_data();
	$this->load->model('add_department_model', 'adm');
	$this->adm->update_department();
	redirect("institute_admin/department_list","refresh");
}

function department_delete($dept_id) {
	$this->session_data();
	$dept_id  = $this->uri->segment(3);
	$this->db->where('dept_id', $dept_id);
	$this->db->delete('department');
	redirect("institute_admin/department_list");
}
    // public function add_institute() {
    //     $this->session_data();
    //     $this->load->model('add_institute_model', 'aim');
    //     $this->aim->create_institute();

    //     $this->load->view('institute_admin/add_institute');
       
    // }

	
	public function step_trainee() {
		$this->session_data();
		
		$sessiondata = array(
			'nid' => $this->input->post('nid'),
		);
	
		$this->session->set_userdata($sessiondata);


		
		$this->load->view('institute_admin/step_trainee',$sessiondata);      
	}

	public function nid_chack(){

		$this->session_data();
		$inputNumber = $this->input->post('nid');
		// Query the database for matching numbers
		$this->db->select('trainee_nid');
		$this->db->from('trainee');
		$this->db->where('trainee_nid', $inputNumber);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			// Matching number found
			$this->db->where('trainee_nid', $inputNumber);
			$histry = $this->db->get('trainee');
			$result['histry1'] =  $histry->result();
			$result['histry2'] =  $histry->row();

		 $this->load->view('institute_admin/trainee_history', $result);
		} else {
			$post_nid['nid'] = $inputNumber;	
			$this->load->view('institute_admin/trainee_info', ['post_nid' => $post_nid]);
		}
	}

	public function save_trainee() {
		$this->session_data();
		$this->load->model('add_trainee_model', 'atm');
		$this->atm->create_trainee();
		redirect('institute_admin/step_trainee');
	}

	public function add_another_course($nid) {
		$this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$data['dataa'] = $this->aim->get_institute();

		$this->load->model('add_department_model', 'adm');
		$data['dept']=$this->adm->get_department();
		
		$this->load->model('add_trainee_model', 'atm');
		$data['data'] = $this->atm->get_trainee_nid('trainee',$nid);
		$this->load->view('institute_admin/add_another_course',$data);
	}

	public function save_another_course() {
		$this->session_data();
		$this->load->model('add_trainee_model', 'atm');
		$this->atm->create_another_trainee();
		redirect('institute_admin/step_trainee');
	}
	// public function save_another_course($id) {
	// 	$this->session_data();
	// 	$this->load->model('add_trainee_model', 'atm');
	// 	$data['data'] = $this->atm->get_trainee_id('trainee',$id);
	// 	$this->load->view('institute_admin/edit_trainee', $data);
	// }
	
	public function trainee_list() {
		$this->session_data();
		$this->load->model('add_trainee_model', 'atm');
		$this->atm->get_trainee();
		$data['inst'] =$this->atm->fetch_institute();
		$data['dept'] =$this->atm->fetch_department();
		$this->load->view('institute_admin/trainee_list',$data);
	}

    public function trainee_details($id) {
        $this->session_data();
        $this->load->model('add_trainee_model', 'atm');
        $data['data'] = $this->atm->get_trainee_details('trainee',$id);
        $this->load->view('institute_admin/trainee_details', $data);
    }


    public function edit_trainee($id) {
		$this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$data['dataa'] = $this->aim->get_institute();

		$this->load->model('add_department_model', 'adm');
		$data['dept']=$this->adm->get_department();
		
		$this->load->model('add_trainee_model', 'atm');
		$data['data'] = $this->atm->get_trainee_id('trainee',$id);
		$this->load->view('institute_admin/edit_trainee', $data);
	}

	public function update_trainee() {
		$this->session_data();
		$this->load->model('add_trainee_model', 'atm');
		$this->atm->update_trainee();
		redirect("institute_admin/trainee_list","refresh");
	}

	function trainee_delete($trainee_id) {
		$this->session_data();
		$trainee_id  = $this->uri->segment(3);
		$this->db->where('trainee_id', $trainee_id);
		$this->db->delete('trainee');
		redirect("institute_admin/trainee_list");
	}

	public function certificate_list (){

		$this->session_data();			
		$this->db->where('trainee_status', 'Complete');
		$histry = $this->db->get('trainee');
		$result['histry_row'] =  $histry->result();
		$this->load->view('institute_admin/trainee_certificate_list',$result);
	}

	public function trainee_history  (){

	// 	$this->db->where('trainee_status', $Complete);
	// 	$histry = $this->db->get('trainee');
	// 	$result['data'] =  $histry->result();
	// 	$result['dataa'] =  $histry->row();

	//  $this->load->view('institute_admin/trainee_history', $result);


		$this->session_data();			
		$this->db->where('trainee_status', 'Complete');
		$histry = $this->db->get('trainee');
		$result['histry_row'] =  $histry->result();
		$this->load->view('institute_admin/trainee_certificate_list',$result);
	}
	


    
 
}

