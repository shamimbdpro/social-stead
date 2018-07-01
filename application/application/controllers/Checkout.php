<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	public function checkou_data(){
        $newdata = array( 
           'url'        => $this->input->post('url'),
           'email'       => $this->input->post('email'),
           'price'      => $this->input->post('price'),
           'name'       => $this->input->post('name'),
           'qty'        => $this->input->post('qty'),
           'amount'        => $this->input->post('amount'),
        );  
        $this->session->set_userdata($newdata);
        
     
     redirect('confirm');
	}

	public function confirm(){
		$data['Header']     = 'header';
		$data['Chekout']    = 'confirm';
		$data['products'] 	= $this->cart->contents();
		$data['logo']		= $this->Setting_model->logo_find();
		$data['paypalp']	= $this->Setting_model->find_paypal();
		$this->load->view('welcome_message',$data);
	}


}
