<?php
ob_start();
class add_project_details_model  extends CI_Model {


    function create_project() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("project_name", "project_name", "xss_clean");
        $this->form_validation->set_rules("project_description", "project_description", "xss_clean");
        $this->form_validation->set_rules("project_type", "project_type", "xss_clean");
        $this->form_validation->set_rules("project_image", "project_image", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('super_admin/company_list/error');
        } else {

            $project_image = $_FILES['project_image']['name'];
            if ($project_image != "") {
                $project_image = random_string('alnum', 10) . '.jpg';

                //insert image
                $config['file_name'] = $project_image;
                $config['upload_path'] = 'uploads/project';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('project_image');

                $file_data = $this->upload->data();
            } else {
                $project_image = "default.png";
            }

            //insert data to database

            $data = array(
                'project_name'             => $this->input->post('project_name'),
                'project_description'                 => $this->input->post('project_description'),
                'project_type'                 => $this->input->post('project_type'),
                'project_image'                 => $project_image,
            );

            $this->db->insert('project', $data);
            //$id = $this->db->insert_id();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
        }
    }

    function get_project() {
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }

    function get_home_project() {
        $this->db->where("project_type", 1);
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }
    function get_home_gas_plant() {
        $this->db->where("project_type", 2);
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }
    function get_home_achievements() {
        $this->db->where("project_type", 3);
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }

    function get_project_id($table, $id)
    {
        $result = $this->db->get_where($table, ['project_id ' => $id])->row();
        return $result;
    }


    function update_project() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("project_name", "project_name", "xss_clean");
        $this->form_validation->set_rules("project_type", "project_type", "xss_clean");
        $this->form_validation->set_rules("project_description", "project_description", "xss_clean");
        $this->form_validation->set_rules("project_image", "project_image", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            //$this->load->view('super_admin/company_list/error');
        } else {

            $project_image = $_FILES['project_image']['name'];

            //OLD IMAGE
            $prev_thumbnail = $this->input->post('old_thumbnail');

            if ($project_image != "") {
                $project_image = random_string('alnum', 10) . '.jpg';
                //insert image
                $config['file_name'] = $project_image;
                $config['upload_path'] = 'uploads/project';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('project_image');

                $file_data = $this->upload->data();
            } else {

                // $project_image = $this->input->post('project_image');
                $project_image = $prev_thumbnail;
            }


            $project_id  = $this->uri->segment(3);


            //insert data to database

            $data = array(
                'project_name'             => $this->input->post('project_name'),
                'project_description'                 => $this->input->post('project_description'),
                'project_type'                 => $this->input->post('project_type'),
                'project_image'                 => $project_image,
            );

            $this->db->where('project_id ', $project_id );
            $this->db->update('project', $data);


        }
    }

    function get_home_organogram() {
        $this->db->where("project_type", 4);
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }
    function get_home_project_area() {
        $this->db->where("project_type", 5);
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }
    function get_home_program_schedule() {
        $this->db->where("project_type", 6);
        $this->db->order_by("project_id", "DESC");
        $query = $this->db->get("project");
        return $query->result();
    }

}
