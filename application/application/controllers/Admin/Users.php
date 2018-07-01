<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Login_model');
	}

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	//add_user page load
	public function add_user(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['adminopne']	= 'open';
			$data['adminactive']= 'active';
			$data['AddUser']	=	'add_user';
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']		= 	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	//manage_user
	public function manage_user(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['adminopne']	= 'open';
			$data['adminactivdde']= 'active';
			$data['ManageUser']	=	'manage_users';
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['allusersdata']	= $this->User_model->all_user_list();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']		= 	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	//edit_user
	public function edit_user($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			if($this->User_model->edit_user($id)){
				$data['userInfo']	=	$this->User_model->edit_user($id);
			}
				$data['ManageUser']	=	'edit_user';
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']		= 	$this->Setting_model->store_icon();
				$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}



////////////////////////////////////////////////
	public function add_user_data_check(){
		if($this->Login_model->is_admin_logged_in() ){
			$this->form_validation->set_rules('firstname','First Name','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('lastname','Last Name','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('email','Email','trim|xss_clean|min_length[11]|valid_email|is_unique[admin.email]');
			$this->form_validation->set_rules('username','Username','trim|xss_clean|min_length[5]|is_unique[admin.user_name]');
			$this->form_validation->set_rules('password','Password','trim|xss_clean|min_length[6]');
			$this->form_validation->set_rules('conpassword','Confirm Password','trim|xss_clean|min_length[6]|matches[password]');
		
			if($this->form_validation->run()	==	FALSE){
				$data['AddUser']	=	'add_user';
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']		= 	$this->Setting_model->store_icon();
				$this->load->view('dashboard_layout',$data);
			}
			else{
				$this->load->model('User_model');
				if($this->User_model->add_user_data_insert()){
					redirect('admin/manage/');
				}
				else{
				$data['errorInsert']	=	'Somethin may rong';
				$data['AddUser']		=	'add_user';
				$data['logo']			=	$this->Setting_model->logo_find();
				$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']		= 	$this->Setting_model->store_icon();
				$this->load->view('dashboard_layout',$data);
				}
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	//user delete
	public function user_delete($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			if($this->User_model->user_delete($id)){
				return TRUE;
			}
			else{
				redirect('admin/manage/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	#edit_user_data_check
	public function edit_user_data_check($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			$this->form_validation->set_rules('firstname','First Name','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('lastname','Last Name','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('username','Username','trim|xss_clean|min_length[5]');
			$this->form_validation->set_rules('oldpassword','Old Password','trim|xss_clean|min_length[6]');
			$this->form_validation->set_rules('newpassword','New Password','trim|xss_clean|min_length[6]');
			$this->form_validation->set_rules('conpassword','Confirm Password','trim|xss_clean|min_length[6]|matches[newpassword]');
		
			if($this->form_validation->run()  ==  FALSE){
				$this->load->model('User_model');
				if($this->User_model->edit_user($id)){
					$data['userInfo'] = $this->User_model->edit_user($id);
				}
				$data['ManageUser']	=	'edit_user';
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']		= 	$this->Setting_model->store_icon();
				$this->load->view('dashboard_layout',$data);
			}
			else{
				$this->load->model('User_model');
				if($this->User_model->edit_user_data_update($id)){
					redirect('admin/manage/');
				}
				else{
					if($this->User_model->edit_user($id)){
						$data['userInfo'] = $this->User_model->edit_user($id);
					}
					$data['errorUpdate']	=	'Somethin may rong';
					$data['ManageUser']		=	'edit_user';
					$data['logo']			=	$this->Setting_model->logo_find();
					$data['store']			= $this->Setting_model->store_data_view();
					$data['icon']		= 	$this->Setting_model->store_icon();
					$this->load->view('dashboard_layout',$data);
				}
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	////////////////////////////////////profile make////////////////////////////////////////////////////////
	#user profile page load
	public function profile(){
		if($this->Login_model->is_admin_logged_in() ){
			$id 	=	$this->session->userdata('current_admin_id');;
			if($this->User_model->edit_user($id)){
				$data['userInfo']	=	$this->User_model->edit_user($id);
			}
			$data['ManageUser'] = 'profile';
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']		= 	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function edit_profile(){
		if($this->Login_model->is_admin_logged_in() ){
			$id  =   $this->session->userdata('current_admin_id');
			if($this->User_model->edit_user($id)){
				$data['userInfo']	=	$this->User_model->edit_user($id);
			}
			$data['ManageUser'] 		= 'edit_profile';
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']		= 	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	#edit_profile_user_data_check

	public function edit_profile_user_data_check(){
		if($this->Login_model->is_admin_logged_in() ){

			$id  =   $this->session->userdata('current_admin_id');

			$this->form_validation->set_rules('firstname','First Name','trim|required|xss_clean|min_length[2]');
			$this->form_validation->set_rules('lastname','Last Name','trim|required|xss_clean|min_length[2]');
			$this->form_validation->set_rules('title','Title','trim|required|xss_clean|min_length[9]');
			$this->form_validation->set_rules('about','About','trim|required|xss_clean|min_length[15]');
			$this->form_validation->set_rules('skills','Skills','trim|required|xss_clean|min_length[10]');
			$this->form_validation->set_rules('facebook','Facebook','trim|xss_clean|min_length[10]');
			$this->form_validation->set_rules('twitter','Twitter','trim|xss_clean|min_length[10]');
			$this->form_validation->set_rules('google','Google','trim|xss_clean|min_length[10]');
			$this->form_validation->set_rules('skype','Skype','trim|xss_clean|min_length[10]');

			if($this->form_validation->run()  ==  FALSE){
				if($this->User_model->edit_user($id)){
					$data['userInfo'] = $this->User_model->edit_user($id);
				}
				$data['ManageUser'] 	= 'edit_profile';
				$data['logo']			=	$this->Setting_model->logo_find();
				$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']		= 	$this->Setting_model->store_icon();
				$this->load->view('dashboard_layout',$data);
			}
			else{
				if($this->User_model->edit_profile_user_data_update($id)){
					if($this->User_model->edit_user($id)){
						$data['userInfo'] = $this->User_model->edit_user($id);
					}
					$data['updateSuccess']  = 'Update Successfully';
					$data['ManageUser']	=	'profile';
					$data['logo']			=	$this->Setting_model->logo_find();
					$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']		= 	$this->Setting_model->store_icon();
					$this->load->view('dashboard_layout',$data);
				}
				else{
					if($this->User_model->edit_user($id)){
						$data['userInfo'] = $this->User_model->edit_user($id);
					}
					$data['errorUpdate']	=	'Somethin may rong';
					$data['ManageUser'] 		= 'edit_profile';
					$data['logo']			=	$this->Setting_model->logo_find();
					$data['store']			= $this->Setting_model->store_data_view();
					$data['icon']		= 	$this->Setting_model->store_icon();
					$this->load->view('dashboard_layout',$data);
				}
			}	
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


	////////////////////////image change//////////
	public function profile_image_upload(){
		if($this->Login_model->is_admin_logged_in() ){
			if($file_name = $this->image_upload() ){
				$data=array("image" => $file_name);

				$this->profile_image_resize($file_name);
				if($this->User_model->user_profile_image_update($file_name)){
						$data['message']="Image Upload Successfully!";
						$this->session->set_userdata($data);
						redirect('edit/profile/');
				}else{
					$data['message2']="Image Upload Not Successfully!";
					$this->session->set_userdata($data);
					redirect('edit/profile/');
				}
				
			}else{
				$data['message3']="Image Upload Failed!";
				$this->session->set_userdata($data);
				redirect('edit/profile/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}

	}

	public function image_upload(){
		if($this->Login_model->is_admin_logged_in() ){
			$type = explode('.', $_FILES['userimage']['name']);
			$type = $type[count($type)-1];
			$file_name= uniqid(rand()).'.'.$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPEG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['userimage']['tmp_name'] ) ){

					move_uploaded_file( $_FILES['userimage']['tmp_name'], './libs/image/'.$file_name );
					return $file_name;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public	function profile_image_resize($sourse){
		if($this->Login_model->is_admin_logged_in() ){
			$config['image_library'] = 'gd2';
			$config['source_image'] = './libs/image/'.$sourse;
			$config['new_image'] = './libs/image/userimage/';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 150;
			$config['height'] = 150;
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

}