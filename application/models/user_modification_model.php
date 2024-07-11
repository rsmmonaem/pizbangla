<?php
ob_start();
class x  extends CI_Model
{

	function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
    }

    function get_user() {
        $this->db->order_by("user_name", "DESC");
        $query = $this->db->get("admin_user");
        return $query->result();
    }
    function get_certificate_id($table, $u_id){
        $result = $this->db->get_where($table, ['trainee_id' => $u_id])->row();
        return $result;
    }

    function get_user_modification_id($table, $user_name)
    {
        $result = $this->db->get_where($table, ['user_name' => $user_name])->row();
        return $result;
    }

	function get_user_modification_user_name($table, $user_name)
    {
        $result = $this->db->get_where($table, ['user_id' => $user_name])->row();
        return $result;
    }
    function get_inst_user_modification_id($table, $inst_user_id)
    {
        $result = $this->db->get_where($table, ['inst_user_id' => $inst_user_id])->row();
        return $result;
    }
	function get_trainee_user_modification_id($table, $trainee_username)
    {
        $result = $this->db->get_where($table, ['trainee_username' => $trainee_username])->row();
        return $result;
    }

	function get_normal_user_modification_id($table, $user_id)
    {
        $result = $this->db->get_where($table, ['user_id' => $user_id])->row();
        return $result;
    }
	
    function create_user()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("full_name", "full_name", "xss_clean");
        $this->form_validation->set_rules("user_name", "user_name", "xss_clean");
        $this->form_validation->set_rules("pass_word", "pass_word", "xss_clean");
        $this->form_validation->set_rules("user_type", "user_type", "xss_clean");
        $this->form_validation->set_rules("status", "status", "xss_clean");
//        if ($this->form_validation->run() == FALSE) {
//
//
//        } else {
//
//            $slider_image = $_FILES['slider_image']['name'];
//            if ($slider_image != "") {
//                $slider_image = random_string('alnum', 10) . '.jpg';
//
//                //insert image
//                $config['file_name'] = $slider_image;
//                $config['upload_path'] = 'uploads/slider';
//                $config['allowed_types'] = 'gif|jpg|jpeg|png';
//                $config['max_size'] = '100000';
//                $config['encrypt_name'] = false;
//                $config['image_library'] = 'gd2';
//                $this->load->library('upload', $config);
//                $this->upload->initialize($config);
//                $this->upload->do_upload('slider_image');
//
//                $file_data = $this->upload->data();
//            } else {
//                $slider_image = "default.png";
//            }


            //insert data to database

            $data = array(
                'full_name' => $this->input->post('full_name'),
                'user_name' => $this->input->post('user_name'),
                'pass_word' => $this->input->post('pass_word'),
                'user_type' => $this->input->post('user_type'),
                'status'    => $this->input->post('status'),


            );

            $this->db->insert('admin_user', $data);
            //$id = $this->db->insert_id();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');


        }







		function update_user_modificationxx($user_id) {
			$this->load->library("form_validation");
			
			$this->form_validation->set_rules("full_name", "Full Name", "xss_clean");
			$this->form_validation->set_rules("pass_word", "Password", "xss_clean");
			
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_message', 'Validation Failed');
			} else {
				$data = array(
					'full_name' => $_POST["full_name"],
					'pass_word' => $_POST['pass_word'],
				);
		
				$data2 = array(
					'full_name' => $_POST["full_name"],
					'password' => $_POST['pass_word'],
				);
		
				// Update in 'admin_user' table
				$this->db->where('user_id', $user_id);
				$update_admin_user = $this->db->update('admin_user', $data);
		
				// Update in 'p_normal_users' table
				$this->db->where('user_id', $user_id);
				$update_normal_user = $this->db->update('p_normal_users', $data2);
		
				// Check if both updates were successful
				if ($update_admin_user && $update_normal_user) {
					$this->session->set_flashdata('success_message', 'Updated Successfully.');
				} else {
					$this->session->set_flashdata('error_message', 'Not Updated Successfully.');
				}
			}
		}
	
	
		function update_user_profile($user_id) {
			$this->load->library("form_validation");
			
			$this->form_validation->set_rules("full_name", "Full Name", "xss_clean");
			$this->form_validation->set_rules("pass_word", "Password", "xss_clean");
			
			if ($this->form_validation->run() == FALSE) {
				$this->session->set_flashdata('error_message', 'Validation Failed');
			} else {
				$data = array(
					'full_name' => $this->input->post('full_name'),
					'pass_word' => $this->input->post('pass_word'),
				);
		
				$data2 = array(
					'full_name' => $this->input->post('full_name'),
					'password' => $this->input->post('pass_word'),
				);
		
				// Update in 'admin_user' table
				$this->db->where('user_id', $user_id);
				$update_admin_user = $this->db->update('admin_user', $data);
		
				// Update in 'p_normal_users' table
				$this->db->where('user_id', $user_id);
				$update_normal_user = $this->db->update('p_normal_users', $data2);
		
				// Check if both updates were successful
				if ($update_admin_user && $update_normal_user) {
					$this->session->set_flashdata('success_message', 'Updated Successfully.');
				} else {
					$this->session->set_flashdata('error_message', 'Not Updated Successfully.');
				}
			}
		}
		
    


}
