<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }



    public function session_data() {
        $this->load->library('session');
        $this->load->helper('text');
        $this->load->helper('date');
        $this->load->model('user_modification_model', 'umm');
        $this->load->model('page_model', 'pm');

		 if (!$this->session->userdata('user_name')) {
			 redirect("login");
		 }
	}
	 


	public function index(){
		$this->session_data();
		if (!$this->session->userdata('user_name')) {
			redirect("login");
		} else {
			$this->load->view('User/index');
		}
	}	 
	
    public function edit_user($id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $data['data'] = $this->umm->get_user_modification_user_name('admin_user',$id);
        $this->load->view('user/edit_user',$data);
    }

	public function update_user_modification($user_id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->update_user_profile($user_id);
		redirect("user/edit_user/$user_id");
    }

	

    // public function update_user_modification() {
    //     $this->session_data();
    //     $this->load->model('user_modification_model', 'umm');
    //     $this->umm->update_user_modification();
    //     redirect("super_admin/user_modification_list");
    // }


	
	
}
