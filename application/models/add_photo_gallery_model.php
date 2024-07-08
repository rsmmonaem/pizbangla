<?php
ob_start();
class add_photo_gallery_model  extends CI_Model {

// Create Notice
    function create_photo_gallery() {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("photo_gallery_title", "photo_gallery_title", "xss_clean");
        $this->form_validation->set_rules("photo_gallery_action_link", "photo_gallery_action_link", "xss_clean");
        $this->form_validation->set_rules("date", "date", "xss_clean");
        $this->form_validation->set_rules("photo_gallery_img", "photo_gallery_img", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            // $this->load->view('super_admin/company_list/error');


        } else {

            $photo_gallery_img = $_FILES['photo_gallery_img']['name'];
            if ($photo_gallery_img != "") {
                $photo_gallery_img = random_string('alnum', 10) . '.jpg';

                //insert image
                $config['file_name'] = $photo_gallery_img;
                $config['upload_path'] = 'uploads/photo_gallery';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;
                $config['image_library'] = 'gd2';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('photo_gallery_img');

                $file_data = $this->upload->data();
            } else {
                $photo_gallery_img = "default.png";
            }



            //insert data to database

            $data = array(
                'photo_gallery_title'             => $this->input->post('photo_gallery_title'),
                'photo_gallery_action_link'                 => $this->input->post('photo_gallery_action_link'),
                'date'                 => $this->input->post('date'),
                'photo_gallery_img'                 => $photo_gallery_img,

            );

            $this->db->insert('photo_gallery', $data);
            //$id = $this->db->insert_id();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
        }
    }

// Display photo_gallery
    function get_photo_gallery() {
        $this->db->order_by("photo_gallery_id ", "DESC");
        $query = $this->db->get("photo_gallery");
        return $query->result();
    }

     function get_home_photo_gallery() {
        $this->db->order_by("photo_gallery_id ", "DESC");
        $query = $this->db->get("photo_gallery",3);
        return $query->result();
    }

    function get_photo_gallery_header() {
        $this->db->order_by("photo_gallery_id ", "DESC");
        $query = $this->db->get("photo_gallery", 4);
        return $query->result();
    }

// Display photo_gallery By Id As A row
      function get_photo_gallery_id($table, $id)
    {
        $result = $this->db->get_where($table, ['photo_gallery_id ' => $id])->row();
        return $result;
    }

    function get_photo_gallery_details($table, $id)
    {
        $result = $this->db->get_where($table, ['photo_gallery_id ' => $id])->row();
        return $result;
    }


// Update photo_gallery
    function update_photo_gallery() {


        $this->load->library("form_validation");
        $this->form_validation->set_rules("photo_gallery_title", "photo_gallery_title", "xss_clean");
        $this->form_validation->set_rules("photo_gallery_action_link", "photo_gallery_action_link", "xss_clean");
        $this->form_validation->set_rules("date", "date", "xss_clean");
        $this->form_validation->set_rules("photo_gallery_img", "photo_gallery_img", "xss_clean");


        if ($this->form_validation->run() == FALSE) {
            echo  $this->upload->display_errors();
            //$this->load->view('super_admin/company_list/error');
        } else {

            $photo_gallery_img = $_FILES['photo_gallery_img']['name'];

            //OLD IMAGE
            $prev_thumbnail = $this->input->post('old_thumbnail');

            if ($photo_gallery_img != "") {
                $photo_gallery_img = random_string('alnum', 10) . '.jpg';
                //insert image
                $config['file_name'] = $photo_gallery_img;
                $config['upload_path'] = 'uploads/photo_gallery';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size']         = '100000';
                $config['encrypt_name']     = false;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('photo_gallery_img');

                $file_data = $this->upload->data();
            } else {

                // $photo_gallery_img = $this->input->post('photo_gallery_img');
                $photo_gallery_img = $prev_thumbnail;
            }


            $photo_gallery_id  = $this->uri->segment(3);


            //insert data to database

            $data = array(

                'photo_gallery_title'             => $this->input->post('photo_gallery_title'),
                'photo_gallery_action_link'                 => $this->input->post('photo_gallery_action_link'),
                'date'                 => $this->input->post('date'),
                'photo_gallery_img'                 => $photo_gallery_img,
            );

            $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Updated successfully.</div>');

            $this->db->where('photo_gallery_id ', $photo_gallery_id );
            $this->db->update('photo_gallery', $data);


        }
    }

}
