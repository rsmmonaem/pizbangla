<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class trainee extends CI_Controller {


    function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }


    public function session_data() {
        // $this->load->model('requisition_model', 'rm');
        // $this->load->model('purchase_order_model', 'po');
        $this->load->library('session');
		$this->load->model('user_modification_model', 'umm');
        // if (!$this->session->userdata('user_name')) {
        //     redirect("login");
        // }
		$trainee_username = $this->session->userdata('user_name');
		$user_info = $this->umm->get_trainee_user_modification_id('trainee',$trainee_username);
    }


    public function index() {

		$this->load->model('user_modification_model', 'umm');
		 $this->load->library('session');
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {
			
			// print_r($user_name);
            $this->load->view('trainee/index');
        }
    }

    public function edit_profile(){
        $this->session_data();
        $this->load->view('trainee/edit_profile');
    }
    public function update_profile(){
        $this->session_data();
        $this->load->model('profile_update_model', 'pum');
        $this->pum->update_profile_trainee();
        redirect("trainee");
    }



	public function trainee_history($user_name){

		$this->session_data();

			
			$this->db->where('trainee_username', $user_name);
			$histry = $this->db->get('trainee');
			$result['histry'] =  $histry->result();
			$result['histry_row'] =  $histry->row();
		$this->load->view('trainee/trainee_history', $result);
	
	}
	// public function certificate_list ($user_name){
	public function certificate_list (){

			$this->session_data();			
			$this->db->where('trainee_status', 'Complete');
			$histry = $this->db->get('trainee');
			$result['histry_row'] =  $histry->result();
			$this->load->view('trainee/trainee_certificate_list', $result);
	}

	public function certificate ($trainee_id){

		$this->session_data();		
		
		
		 if ($this->db->where('trainee_id', $trainee_id) && $this->db->where('trainee_status', 'Complete')) {
			
			$histry = $this->db->get('trainee');
			$result['histry_row'] =  $histry->row();


		$this->load->view('trainee/certificate', $result);
		 }else {
			redirect('trainee/Certificate_list');
		 }
}
	public function add_another_course($nid) {
		$this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$data['dataa'] = $this->aim->get_institute();

		$this->load->model('add_department_model', 'adm');
		$data['dept']=$this->adm->get_department();

		$this->load->model('add_trainee_model', 'atm');
		$data['data'] = $this->atm->get_trainee_nid('trainee',$nid);
		$this->load->view('trainee/add_another_course',$data);
	}

	public function save_another_course() {
		$this->session_data();
		$this->load->model('add_trainee_model', 'atm');
		$this->atm->create_another_trainee();
		redirect('trainee');
	}  
 
}

