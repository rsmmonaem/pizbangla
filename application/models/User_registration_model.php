<?php
ob_start();
class User_registration_model  extends CI_Model {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
    }

    function save_user() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("full_name", "full_name", "xss_clean");
        $this->form_validation->set_rules("email", "email", "xss_clean");
		$this->form_validation->set_rules("phone", "phone", "xss_clean");
        $this->form_validation->set_rules("nid", "nid", "xss_clean");
        $this->form_validation->set_rules("country_id", "country_id", "xss_clean");
        $this->form_validation->set_rules("reff_code", "reff_code", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
			return $this->session->set_flashdata('error_message', 'Something went wrong! Unable to register user.');
			
        } else {
            //insert data to database

            $data = array(
                'full_name'             => $this->input->post('full_name'),
                'email'             	=> $this->input->post('email'),
                'password' 				=> $this->input->post('password'),
                'phone'          		=> $this->input->post('phone'),
                'nid'            		=> $this->input->post('nid'),
                'country_id'          	=> $this->input->post('country_id'),
				'reff_code' 			=> $this->input->post('reff_code'),
				'user_id' 				=> $this->input->post('user_id'),
				'created_at' 			=> date('Y-m-d'),
            );

			$data2 = array(
				'full_name'         => $this->input->post('full_name'),
				'user_name' 		=> $this->input->post('email'),
                'pass_word' 		=> $this->input->post('password'),
				'user_type' 		=> 'normal_user',
				'status' 			=> 'ENABLE',
				'user_id' 			=> $this->input->post('user_id'),
            );

			$this->db->insert('p_normal_users', $data);
			$this->db->insert('admin_user', $data2);
			$this->session->set_flashdata('success_message', 'User registration successful.');
        }
    }

	function update_user() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("full_name", "full_name", "xss_clean");
        $this->form_validation->set_rules("new_user_name", "user_name", "xss_clean");
        $this->form_validation->set_rules("new_pass_word", "pass_word", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/update_profile/error');
        } else {

            $user_id = "admin";
            $user_name = $this->input->post('user_name');
            $new_user_name = $this->input->post('new_user_name');

            // find out user name
            if ($user_name != $new_user_name) {
                // find out user name
                if (preg_match('/\s/', $new_user_name)) {
                    redirect("super_admin/update_profile/username_invalid");
                }
                $qry = "SELECT count(*) as cnt from admin_user where user_name= '$new_user_name'";
                $res = $this->db->query($qry, array($new_user_name))->result();

                if ($res[0]->cnt >= 1) {
                    redirect("super_admin/update_profile/username_error");
                }
            }

            //insert data to database
            $data2 = array(
                'full_name'         => $this->input->post('full_name'),
                'user_name'         => $this->input->post('new_user_name'),
                'pass_word'         => $this->input->post('new_pass_word')
            );

            $this->db->where('user_id', $user_id);
            $this->db->update('admin_user', $data2);

            $this->session->unset_userdata("user_name");
            $this->session->unset_userdata("user_type");
            $this->session->unset_userdata("user_id");
            $this->session->unset_userdata("status");

            $this->session->sess_destroy();
            $this->session->set_flashdata('logout_notification', 'logged_out');
            redirect("super_admin");
        }
    }
    function getadmin() {
        $this->db->order_by("u_id", "DESC");
        $this->db->where('user_id', "admin");
        $query = $this->db->get("admin_user");
        return $query->result();
    }

    function update_admin() {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("full_name", "full_name", "xss_clean");
        $this->form_validation->set_rules("new_user_name", "user_name", "xss_clean");
        $this->form_validation->set_rules("new_pass_word", "pass_word", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            $this->load->view('super_admin/update_profile/error');
        } else {

            $user_id = "admin";
            $user_name = $this->input->post('user_name');
            $new_user_name = $this->input->post('new_user_name');

            // find out user name
            if ($user_name != $new_user_name) {
                // find out user name
                if (preg_match('/\s/', $new_user_name)) {
                    redirect("super_admin/update_profile/username_invalid");
                }
                $qry = "SELECT count(*) as cnt from admin_user where user_name= '$new_user_name'";
                $res = $this->db->query($qry, array($new_user_name))->result();

                if ($res[0]->cnt >= 1) {
                    redirect("super_admin/update_profile/username_error");
                }
            }

            //insert data to database
            $data2 = array(
                'full_name'         => $this->input->post('full_name'),
                'user_name'         => $this->input->post('new_user_name'),
                'pass_word'         => $this->input->post('new_pass_word')
            );

            $this->db->where('user_id', $user_id);
            $this->db->update('admin_user', $data2);

            $this->session->unset_userdata("user_name");
            $this->session->unset_userdata("user_type");
            $this->session->unset_userdata("user_id");
            $this->session->unset_userdata("status");

            $this->session->sess_destroy();
            $this->session->set_flashdata('logout_notification', 'logged_out');
            redirect("super_admin");
        }
    }




}
