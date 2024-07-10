<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller {


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





	 public function index() {

		 $this->load->library('session');
		 if (!$this->session->userdata('user_name')) {
			 redirect("login");
		 } else {
			 $this->session_data();
             $this->load->model('add_trainee_model', 'atm');
             $data['data'] = $this->atm->get_trainee_dashboard();
           //  $data['data'] = $this->atm->get_pending_trainee();

			$this->load->view('super_admin/index', $data);
		 }
	 }

    public function message_list() {
        $this->session_data();
        $this->load->helper('text');
        $this->load->helper('date');
        $this->db->order_by("user_id", "DESC");
        $data['data'] = $this->db->get("contact_message")->result();
        $this->load->view('super_admin/message_list', $data);
    }


    public function about_us() {
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $data['data'] = $this->pm->about_us_id('pages');
        $this->load->view('super_admin/about_us', $data);
    }
    public function update_about_us(){
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $this->pm->update_about_us();
        redirect("super_admin/about_us","refresh");
    }


    public function contact_page() {
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $data['data'] = $this->pm->contact_page_id('contact_page');
        $this->load->view('super_admin/contact_page', $data);
    }

    public function update_contact_page(){
        $this->session_data();
        $this->load->model('page_model', 'pm');
        $this->pm->update_contact_page();
        redirect("super_admin/contact_page","refresh");
    }

	 //Department

	 public function add_department() {
		 $this->session_data();
		 $this->load->model('add_institute_model', 'aim');
		 $data['data'] = $this->aim->get_institute();
		 $this->load->view('super_admin/add_department', $data);
	 }


	 public function save_department() {
		$this->session_data();
   		$this->load->model('add_department_model', 'adm');
		$this->adm->create_department();
		redirect("super_admin/add_department");
	}

	 public function department_list() {
		 $this->session_data();
		 $this->load->model('add_department_model', 'adm');
		 $data['data']=$this->adm->get_department();

		 $this->load->view('super_admin/department_list', $data);
	 }

	 public function edit_department($id) {
		 $this->session_data();

		 $this->load->model('add_institute_model', 'aim');
		 $data['dataa'] = $this->aim->get_institute();

		 $this->load->model('add_department_model', 'adm');
		 $data['data'] = $this->adm->get_department_id('department',$id);
		 $this->load->view('super_admin/edit_department', $data);

	 }

		 public function update_department() {
		 $this->session_data();
		 $this->load->model('add_department_model', 'adm');
		 $this->adm->update_department();
		 redirect("super_admin/department_list","refresh");
	 }

	 function department_delete($dept_id) {
		 $this->session_data();
		 $dept_id  = $this->uri->segment(3);
		 $this->db->where('dept_id', $dept_id);
		 $this->db->delete('department');
		 redirect("super_admin/department_list");
	 }



	 //End Department

		 // Trainee Controller

		//  public function add_trainee() {
		// 	 $this->session_data();
		// 	 $this->load->view('super_admin/add_trainee');
		//  }

		 public function save_trainee() {
			$this->session_data();
			$this->load->model('add_trainee_model', 'atm');
			$this->atm->create_trainee();
			redirect('super_admin/step_trainee');
		}

        public function pending_list() {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->get_pending_trainee();
            $this->load->view('super_admin/pending_list',$data);
        }

        public function approve_trainee($trainee_id) {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->approve_trainee('trainee',$trainee_id);
            redirect("super_admin/pending_list");
        }

		public function complete_trainee($trainee_id) {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->approve_trainee('trainee',$trainee_id);
            $this->load->view('super_admin/pending_list', $data);
        }

		public function certificate_list (){

			$this->session_data();
			$this->db->where('trainee_status', 'Active');
			$histry = $this->db->get('trainee');
			$result['histry_row'] =  $histry->result();
			$this->load->view('super_admin/trainee_certificate_list',$result);
		}
        public function approve_certificate($trainee_id) {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->approve_certificate('trainee',$trainee_id);
            redirect("super_admin/certificate_list");
        }

		 public function trainee_list() {
		 	$this->session_data();
		 	$this->load->model('add_trainee_model', 'atm');
		 	$data['data'] = $this->atm->get_trainee();
		 	$this->load->view('super_admin/trainee_list', $data);
		 }

		 public function edit_trainee($id) {
		 	$this->session_data();
			 $this->load->model('add_institute_model', 'aim');
			 $data['dataa'] = $this->aim->get_institute();

			 $this->load->model('add_department_model', 'adm');
			 $data['dept']=$this->adm->get_department();

		 	$this->load->model('add_trainee_model', 'atm');
		 	$data['data'] = $this->atm->get_trainee_id('trainee',$id);
		 	$this->load->view('super_admin/edit_trainee', $data);
		 }

		 public function update_trainee() {
		 	$this->session_data();
		 	$this->load->model('add_trainee_model', 'atm');
		 	$this->atm->update_trainee();
		 	redirect("super_admin/trainee_list","refresh");
		 }

		 function trainee_delete($trainee_id) {
		 	$this->session_data();
		 	$trainee_id  = $this->uri->segment(3);
		 	$this->db->where('trainee_id', $trainee_id);
		 	$this->db->delete('trainee');
		 	redirect("super_admin/trainee_list");
		 }

        public function trainee_details($id) {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->get_trainee_details('trainee',$id);
            $this->load->view('super_admin/trainee_details', $data);
        }

        public function trainee_certificate($id) {
            $this->session_data();
            $this->load->model('add_trainee_model', 'atm');
            $data['data'] = $this->atm->get_trainee_certificate('trainee',$id);
            $this->load->view('super_admin/trainee_certificate', $data);
        }

		 //End Department

        // public function step_trainee() {
        //     $this->session_data();
        //    //$this->load->model('add_trainee_model', 'atm');
        //    //$this->atm->create_trainee();
        //     $this->load->view('super_admin/step_trainee');
        // }


		// public function step_trainee() {
		// 	$this->session_data();

		// 	$this->load->view('super_admin/step_trainee');
		// }

		// public function nid_chack(){
		// 	$this->session_data();
		// 	$inputNumber = $this->input->post('nid');

		// 	// Query the database for matching numbers
		// 	$this->db->select('trainee_nid');
		// 	$this->db->from('trainee');
		// 	$this->db->where('trainee_nid', $inputNumber);
		// 	$query = $this->db->get();

		// 	if ($query->num_rows() > 0) {
		// 		// Matching number found

		// 	$this->load->view('super_admin/trainee_info');
		// 	} else {
		// 		// No matching number found
		// 		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been Created successfully.</div>');
		// 		redirect('super_admin/step_trainee');
		// 	}
		// }




























    //    Add Notice
	 public function add_notice() {
		 $this->session_data();
		 $this->load->model('add_notice_model', 'anm');
		 $this->anm->create_notice();
		 $this->load->view('super_admin/add_notice');
	 }

	 public function notice_list() {
		 $this->session_data();
		 $this->load->model('add_notice_model', 'anm');
		 $data['data'] = $this->anm->get_notice();
		 $this->load->view('super_admin/notice_list',$data);
	 }

	 public function edit_notice($id) {
		 $this->session_data();
		 $this->load->model('add_notice_model', 'anm');
		 $data['data'] = $this->anm->get_notice_id('notice',$id);
		 $this->load->view('super_admin/notice_edit', $data);
	 }

	 public function update_notice() {
		 $this->session_data();
		 $this->load->model('add_notice_model', 'anm');
		 $this->anm->update_notice();
		 redirect("super_admin/notice_list");
	 }

	 public function notice_delete($not_id) {
		 $this->session_data();
		 $not_id  = $this->uri->segment(3);
		 $this->db->where('not_id', $not_id );
		 $this->db->delete('notice');
		 redirect("super_admin/notice_list");
	 }
	 //End Notice


	 //News
	 public function create_news() {
		 $this->session_data();
		 $this->load->model('add_news_model', 'anm');
		 $this->anm->create_news();
		 $this->load->view('super_admin/create_news');
	 }

	 public function news_list() {
		 $this->session_data();
		 $this->load->model('add_news_model', 'anm');
		 $data['data'] = $this->anm->get_news();
		 $this->load->view('super_admin/news_list',$data);
	 }

   	public function edit_news($id) {
		 $this->session_data();
		 $this->load->model('add_news_model', 'anm');
		 $data['data'] = $this->anm->get_news_id('news',$id);
		 $this->load->view('super_admin/edit_news', $data);
	 }

	 public function update_news() {
		 $this->session_data();
		 $this->load->model('add_news_model', 'anm');
		 $this->anm->update_news();
		 redirect("super_admin/news_list");
	 }

	 function news_delete($news_id) {
		 $this->session_data();
		 $news_id = $this->uri->segment(3);
		 $this->db->where('news_id', $news_id);
		 $this->db->delete('news');
		 redirect("super_admin/news_list");
	 }


	 //End News


    //Start Add Institute
    public function add_institute(){
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
        $this->aim->create_institute();
        $this->load->view('super_admin/add_institute');
    }

    public function institute_list() {
        $this->session_data();
        $this->load->model('add_institute_model', 'aim');
		$data['data'] = $this->aim->get_institute();
        $this->load->view('super_admin/institute_list',$data);
    }

	public function edit_institute() {
		$this->session_data();
		$this->load->model('add_institute_model', 'aim');
		$data['data'] = $this->aim->get_institute_row();
		$this->load->view('super_admin/edit_institute', $data);

	}
   public function update_institute() {
       $this->session_data();
       $this->load->model('add_institute_model', 'aim');
       $this->aim->update_institute();
        redirect("super_admin/institute_list","refresh");
   	}

	function institute_delete($inst_user_id) {
		$this->session_data();
		$inst_user_id = $this->uri->segment(3);
		$this->db->where('user_id', $inst_user_id);
		$this->db->delete('admin_user');
		$this->db->where('inst_user_id', $inst_user_id);
		$this->db->delete('institute');

		// $this->db->delete('admin_user');
		redirect("super_admin/institute_list");
	}
    //End Institute



    //User Modification

	public function user_modification_list() {
        $this->session_data();
		$this->db->where('user_type!=', 'super_admin');
		$all_users = $this->db->get('admin_user');
		$data['data'] =  $all_users->result();
        $this->load->view('super_admin/user_modification_list',$data);
    }

    public function edit_super_admin($id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $data['data'] = $this->umm->get_user_modification_id('admin_user',$id);
        $this->load->view('super_admin/edit_user_super_admin',$data);
    }

    public function edit_user_modification($user_id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $data['data'] = $this->umm->get_user_modification_user_name('admin_user',$user_id);
 		$this->load->view('super_admin/edit_user_modification', $data);

    }

	public function update_user_modification($user_id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->update_user_modificationxx($user_id);
        redirect("super_admin/user_modification_list");
    }


	public function update_admin($user_id) {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->update_user_profile($user_id);
		redirect("super_admin/edit_super_admin/$user_id");
    }

    function user_modification_delete($user_mod_id) {
        $this->session_data();
        $news_id = $this->uri->segment(3);
        $this->db->where('u_id', $user_mod_id);
        $this->db->delete('admin_user');
        redirect("super_admin/user_modification_list");
    }

    public function add_user(){
        $this->session_data();
       //$this->load->model('user_modification_model', 'umm');
       //$this->umm->create_user();
        $this->load->view('super_admin/add_user', 'refresh');
    }
    public function save_user() {
        $this->session_data();
        $this->load->model('user_modification_model', 'umm');
        $this->umm->create_user();
        redirect("super_admin/user_modification_list");
    }


    //End User Modification

    //Start Slider
    public function add_slider() {
        $this->session_data();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('add_slider_model', 'asm');
        $this->asm->create_slider();
        $this->load->view('super_admin/add_slider');
    }

    public function slider_list() {
        $this->session_data();
        $this->load->model('add_slider_model', 'asm');
        $data['data'] = $this->asm->get_slider();
        $this->load->view('super_admin/slider_list', $data);
    }

    public function edit_slider($id) {
        $this->session_data();
        $this->load->model('add_slider_model', 'asm');
        $data['data'] = $this->asm->get_slider_id('slider',$id);
        $this->load->view('super_admin/edit_slider', $data);
    }

    public function update_slider() {
        $this->session_data();
        $this->load->model('add_slider_model', 'asm');
        $this->asm->update_slider();
        redirect("super_admin/slider_list");
    }

    function slider_delete($slider_id) {
        $this->session_data();
        $slider_id = $this->uri->segment(3);
        $this->db->where('slider_id', $slider_id);
        $this->db->delete('slider');
        redirect("super_admin/slider_list");
    }
    //End Slider

    function department(){
        $data['institute'] = $this->add_trainee_model->fetch_institute();
        $this->load->view('super_admin/trainee_list',$data);
    }

		//    Add photo_gallery
		public function add_photo_gallery() {
			$this->session_data();
			$this->load->model('add_photo_gallery_model', 'apgm');
			$this->apgm->create_photo_gallery();
			$this->load->view('super_admin/add_photo_gallery');
		}
	
		public function photo_gallery_list() {
			$this->session_data();
			$this->load->model('add_photo_gallery_model', 'apgm');
			$data['data'] = $this->apgm->get_photo_gallery();
			$this->load->view('super_admin/photo_gallery_list',$data);
		}
	
		public function edit_photo_gallery($id) {
			$this->session_data();
			$this->load->model('add_photo_gallery_model', 'apgm');
			$data['data'] = $this->apgm->get_photo_gallery_id('notice',$id);
			$this->load->view('super_admin/photo_gallery_edit', $data);
		}
	
	
		public function update_photo_gallery() {
			$this->session_data();
			$this->load->model('add_photo_gallery_model', 'apgm');
			$this->apgm->update_photo_gallery();
			redirect("super_admin/photo_gallery_list");
		}
	
		public function photo_gallery_delete($not_id) {
			$this->session_data();
			$not_id  = $this->uri->segment(3);
			$this->db->where('not_id', $not_id );
			$this->db->delete('notice');
			redirect("super_admin/notice_list");
		}
		//End photo_gallery
	
	
		//    Add Project
	
		public function add_project() {
			$this->session_data();
			$this->load->model('add_project_details_model', 'apdm');
			$this->apdm->create_project();
			$this->load->view('super_admin/add_project');
		}
	
		public function save_project(){
			$this->session_data();
			$this->load->model('add_project_details_model', 'apdm');
			$this->apdm->create_project();
			redirect('super_admin/add_project');
		}
	
		public function project_list() {
			$this->session_data();
			$this->load->model('add_project_details_model', 'apdm');
			$data['data'] = $this->apdm->get_project();
			$this->load->view('super_admin/project_details', $data);
		}
	
		public function edit_project($id) {
			$this->session_data();
			$this->load->model('add_project_details_model', 'apdm');
			$data['data'] = $this->apdm->get_project_id('project',$id);
			$this->load->view('super_admin/edit_project', $data);
		}
	
		public function update_project() {
			$this->session_data();
			$this->load->model('add_project_details_model', 'apdm');
			$this->apdm->update_project();
			redirect("super_admin/project_list");
		}
	
		public function project_delete($project_id) {
			$this->session_data();
			$project_id  = $this->uri->segment(3);
			$this->db->where('project_id', $project_id );
			$this->db->delete('project');
			redirect("super_admin/project_list ");
		}
		//End Project


		
    //QR code Generate

    function generate_qrcode($data)
    {
        /* Load QR Code Library */
        $this->load->library('ciqrcode');

        /* Data */
        $hex_data   = bin2hex($data);
        $save_name  = $hex_data.'.png';

        /* QR Code File Directory Initialize */
        $dir = 'assets/media/qrcode/';
        if (!file_exists($dir)) {
            mkdir($dir, 0775, true);
        }

        /* QR Configuration  */
        $config['cacheable']    = true;
        $config['imagedir']     = $dir;
        $config['quality']      = true;
        $config['size']         = '1024';
        $config['black']        = array(255,255,255);
        $config['white']        = array(255,255,255);
        $this->ciqrcode->initialize($config);

        /* QR Data  */
        $params['data']     = $data;
        $params['level']    = 'L';
        $params['size']     = 10;
        $params['savename'] = FCPATH.$config['imagedir']. $save_name;

        $this->ciqrcode->generate($params);

        /* Return Data */
        $return = array(
            'trainee_qr_code' => $data,
            'certificate_status' => 'Complete',
            'trainee_qr_code_file'    => $dir. $save_name
        );
        return $return;
    }

    /*
    |-------------------------------------------------------------------
    | Add Data
    |-------------------------------------------------------------------
    |
    */
    function add_qr_data($trainee_id)
    {
        /* Generate QR Code */
        $this->load->model('qr_code_test_model', 'qctm');

        $data = $this->input->post('trainee_qr_code');
        $qr_name  = $this->generate_qrcode($data);

        $this->db->where('trainee_id', $trainee_id);
        $this->db->update('trainee', $qr_name);
        redirect('super_admin/certificate_generate');

    }

    public function certificate_generate(){

        $this->session_data();
        $this->db->where('trainee_status', 'Complete');
        $this->db->where('certificate_status', 'InProcess');
        $history = $this->db->get('trainee');
        $data['data'] =  $history->result();

        $this->db->where('trainee_status', 'Complete');
        $this->db->where('certificate_status', 'Complete');
        $completed = $this->db->get('trainee');
        $data['completed'] =  $completed->result();
        $this->load->view('super_admin/certificate_generate',$data);
    }


}
