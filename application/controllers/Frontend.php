<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
		$this->load->model('user_modification_model', 'umm');

    }
    public function session_data(){
        $this->load->library('session');
    }


	
    public function index() {
		$this->session_data();
		$user_name = $this->session->userdata('user_name');    
		$user_id = $this->session->userdata('user_id');
		if($user_name && $user_id){
		$user_info = $this->umm->get_normal_user_modification_id('p_normal_users', $user_id);
		$admin_info = $this->umm->get_user_modification_id('admin_user', $user_name);
		$data['titile'] = "Home|Piz Bangla";
		$data['user_info'] = $user_info;
		$data['admin_info'] = $admin_info;	
		$this->load->view('Frontend/index',$data);
		}else {
			$data['titile'] = "Home|Piz Bangla";
			$this->load->view('Frontend/index',$data);
		}
    }

	// public function contact(){
    //     $this->load->view('home/contact', $data );
    // }

    public function contact_message_send() {
        $this->load->model('page_model', 'pm');
        $this->pm->create_contact();
		return redirect()->back();
    }

	public function user_register() {
		$this->load->library('session');
		if ($this->session->userdata('user_name')) {
			$this->session->set_flashdata('error_message', 'Already You Are logged in');
			return redirect()->back();
			
		} else {
			$this->load->library('session');
			$this->load->view('Frontend/user_register');
		}
    }




	public function save_user() {
        $this->load->library('session');
		$this->load->model('User_registration_model', 'Urm');
		$this->Urm->save_user();
		return redirect()->back();
    }
	
}
