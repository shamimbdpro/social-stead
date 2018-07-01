<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CartD extends CI_Controller {

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	public function cartddd($product_id = null){
	 	//$product = $this->Shoping_cart_Model->find($product_id);
		$this->form_validation->set_rules('serviceicon','Service Icone','trim|xss_clean|min_length[2]');
		$this->form_validation->set_rules('servicename','Service Name','trim|xss_clean|min_length[3]');
		$this->form_validation->set_rules('urlservice','Url','trim|xss_clean|min_length[3]');
		$data = array(
		        'id'      	=> $this->input->post('pid'),
		        'qty'     	=> $this->input->post('quantity'),
		        'name'   	=> $this->input->post('name'),
		        'price'   	=> $this->input->post('price'),
		        'email'    	=> $this->input->post('email'),
		        'img'    	=> $this->input->post('image'),
		        'url'    	=> $this->input->post('url'),
		);
		$query = $this->cart->insert($data);
			
				//$this->cart->destroy();
		redirect('cart/');
	 }

	public function carpageload(){
		//$this->cart->destroy();
		$data['Header']     = 'header';
		$data['Chekout']    = 'checkout';
		$data['products'] 	= $this->cart->contents();
		$data['logo']		= $this->Setting_model->logo_find();
		$data['paypalp']	= $this->Setting_model->find_paypal();
		$this->load->view('welcome_message',$data);
	}

	public function remove($rowid = null){
		$data = array(
		        'rowid' => $rowid,
		        'qty'   => 0
		);
		$this->cart->update($data);
		redirect('cart/');
	 }


	 //update
	public function update(){

       $cart_info =  $_POST['cart'] ;
 		foreach( $cart_info as $id => $cart)
		{	
                    $rowid = $cart['rowid'];
                    $price = $cart['price'];
                    $amount = $price * $cart['qty'];
                    $qty = $cart['qty'];
                    
                    	$data = array(
				'rowid'   => $rowid,
                                'price'   => $price,
                                'amount' =>  $amount,
				'qty'     => $qty
			);
             
			$this->cart->update($data);
		}
	 	//$product = $this->Shoping_cart_Model->find($product_id);

		//$this->cart->destroy();
		redirect('cart.html');
	 }












}
