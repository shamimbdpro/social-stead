<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	public function contacts()
	{
		$data['Header']     = 'header';
		$data['Contact']    = 'contact';
		$data['logo']		= $this->Setting_model->logo_find();
		$this->load->view('welcome_message',$data);
	}

	public function customer_contact(){
		if($this->Contact_model->customer_message_insert() ){
			$data['message']="Msg Send Successfully!";
			$data['Header']     = 'header';
			$data['Contact']    = 'contact';
			$data['logo']		= $this->Setting_model->logo_find();
			$this->load->view('welcome_message',$data);

		}else{
			$data['message2']="Msg Not Send(Try Again)";
			$data['Header']     = 'header';
			$data['Contact']    = 'contact';
			$data['logo']		= $this->Setting_model->logo_find();
			$this->load->view('welcome_message',$data);
		}
	}
}
