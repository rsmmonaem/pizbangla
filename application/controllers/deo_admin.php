<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class deo_admin extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }


    public function session_data()
    {
        // $this->load->model('requisition_model', 'rm');
        // $this->load->model('purchase_order_model', 'po');
		
        $this->load->library('session');
		$this->load->model('user_modification_model', 'umm');
        // if (!$this->session->userdata('user_name')) {
        //     redirect("login");
        // }
    }

    public function edit_profile(){
        $this->session_data();
        $this->load->view('deo_admin/edit_profile');
    }
    public function update_profile(){
        $this->session_data();
        $this->load->model('profile_update_model', 'pum');
        $this->pum->update_profile_deo();
        redirect("deo_admin/edit_profile");
    }



    public function index()
    {
		$this->session_data();
        $this->load->library('session');
        if (!$this->session->userdata('user_name')) {
            redirect("login");
        } else {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->get_trainee_dashboard();
            $this->load->view('deo_admin/index', $data);
        }
    }

    public function certificate(){
        $this->session_data();
        $this->db->order_by("trainee_id", "DESC");
        $history = $this->db->get('trainee');
        $history_row['history_row'] =  $history->result();
        $this->load->view('deo_admin/certificate', $history_row);
    }

    public function main_certificate($id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $data['data'] = $this->umm->get_certificate_id('trainee',$id);
        $this->load->view('deo_admin/main_certificate', $data);

    }


    public function add_institute() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $this->aim->create_institute();

        $this->load->view('deo_admin/add_institute');

    }


    public function step_trainee() {
        $this->session_data();

        $sessiondata = array(
            'nid' => $this->input->post('nid'),
        );

        $this->session->set_userdata($sessiondata);



        $this->load->view('deo_admin/step_trainee',$sessiondata);
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

            $this->load->view('deo_admin/trainee_history', $result);
        } else {

			$this->load->model('add_institute_model', 'aim');
			$data['dataa'] = $this->aim->get_institute();
	
			$this->load->model('add_department_model', 'adm');
			$data['dept']=$this->adm->get_department();
			
            $data['nid'] = $inputNumber;
    
            $this->load->view('deo_admin/trainee_info', $data);
        }
    }

    public function save_trainee() {
        $this->session_data();
        $this->load->model('add_trainee_model', 'atm');
        $this->atm->create_trainee();
        redirect('deo_admin/step_trainee');
    }

    public function add_another_course($nid) {
        $this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$data['dataa'] = $this->aim->get_institute();

		$this->load->model('add_department_model', 'adm');
		$data['dept']=$this->adm->get_department();

        $this->load->model('add_trainee_model', 'atm');
        $data['data'] = $this->atm->get_trainee_nid('trainee',$nid);
        $this->load->view('deo_admin/add_another_course',$data);
    }

    public function save_another_course() {
        $this->session_data();
        $this->load->model('add_trainee_model', 'atm');
        $this->atm->create_another_trainee();
        redirect('deo_admin/step_trainee');
    }
    // public function save_another_course($id) {
    // 	$this->session_data();
    // 	$this->load->model('add_trainee_model', 'atm');
    // 	$data['data'] = $this->atm->get_trainee_id('trainee',$id);
    // 	$this->load->view('deo_admin/edit_trainee', $data);
    // }

    public function trainee_list() {
        $this->session_data();
        $this->load->model('add_trainee_model', 'atm');
        $data['data'] = $this->atm->get_trainee();
        $this->load->view('deo_admin/trainee_list', $data);
    }

    public function trainee_details($id) {
        $this->session_data();
        $this->load->model('add_trainee_model', 'atm');
        $data['data'] = $this->atm->get_trainee_details('trainee',$id);
        $this->load->view('deo_admin/trainee_details', $data);
    }


    public function edit_trainee($id) {
        $this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$data['dataa'] = $this->aim->get_institute();

		$this->load->model('add_department_model', 'adm');
		$data['dept']=$this->adm->get_department();

        $this->load->model('add_trainee_model', 'atm');
        $data['data'] = $this->atm->get_trainee_id('trainee',$id);
        $this->load->view('deo_admin/edit_trainee', $data);
    }

    public function update_trainee() {
        $this->session_data();
        $this->load->model('add_trainee_model', 'atm');
        $this->atm->update_trainee();
        redirect("deo_admin/trainee_list","refresh");
    }

    function trainee_delete($trainee_id) {
        $this->session_data();
        $trainee_id  = $this->uri->segment(3);
        $this->db->where('trainee_id', $trainee_id);
        $this->db->delete('trainee');
        redirect("deo_admin/trainee_list");
    }

    //News
    public function create_news() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $this->anm->create_news();
        $this->load->view('deo_admin/create_news');
    }

    public function news_list() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $data['data'] =  $this->anm->get_news();
        $this->load->view('deo_admin/news_list', $data);
    }

    public function edit_news($id) {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $data['data'] = $this->anm->get_news_id('news',$id);
        $this->load->view('deo_admin/edit_news', $data);

    }

    public function update_news() {
        $this->session_data();
        $this->load->model('add_news_model', 'anm');
        $this->anm->update_news();
        redirect("deo_admin/news_list");
    }

    function news_delete($news_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('news_id', $news_id);
        $this->db->delete('news');
        redirect("deo_admin/news_list");
    }
    //End News


    //    Add Notice

    public function add_notice() {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $this->anm->create_notice();
        $this->load->view('deo_admin/add_notice');
    }

    public function notice_list() {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $data['data'] = $this->anm->get_notice();
        $this->load->view('deo_admin/notice_list', $data);
    }

    public function edit_notice($id) {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $data['data'] = $this->anm->get_notice_id('notice',$id);
        $this->load->view('deo_admin/notice_edit', $data);

    }


    public function update_notice() {
        $this->session_data();
        $this->load->model('add_notice_model', 'anm');
        $this->anm->update_notice();
        redirect("deo_admin/notice_list");
    }

    public function notice_delete($not_id) {
        $this->session_data();
        $not_id  = $this->uri->segment(3);
        $this->db->where('not_id', $not_id );
        $this->db->delete('notice');
        redirect("deo_admin/notice_list");
    }
    //End Notice

}
