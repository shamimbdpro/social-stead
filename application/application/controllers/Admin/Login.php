<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index(){
		
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}
		else{
			$this->load->view('login_page');
		}
	}
	//login user data check
	public function login_user_data_check(){
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			$this->form_validation->set_rules('Username','User Name','trim|xss_clean|min_length[6]');
			$this->form_validation->set_rules('Password','Password','trim|xss_clean|min_length[6]');

			if($this->form_validation->run() == FALSE){
				$this->load->view('login_page');
			}
			else{
				$result = $this->Login_model->login_user_data_check();
				if($result){
					redirect('Dashboard');
				}
				else{
					$data['errorlogin']	=	'this useremail and password is invaild';
					$this->load->view('login_page',$data);
				}
			}
		}
	}

	public function logout(){
		if($this->Login_model->is_admin_logged_in() ){
			$this->Login_model->this_user_activity_data_remove();

			$this->session->userdata('current_admin_id');
			$this->session->userdata('current_admin_name');
			$this->session->userdata('current_admin_image');

			$this->session->sess_destroy();
			redirect('social-admin/?logged-in-first');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


}
