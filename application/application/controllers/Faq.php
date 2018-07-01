<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	public function faqs()
	{
		$data['Header']     = 'header';
		$data['Faq']    	= 'faq';
		$data['logo']		= $this->Setting_model->logo_find();
		$this->load->view('welcome_message',$data);
	}
}
