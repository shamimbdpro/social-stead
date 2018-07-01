<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard');
		}
		else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function order(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['order']			=	'order';
			$data['orderactiv']		=	'active';
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['orderdetails']  	= $this->OrderdetailsModel->all_user_order_detials();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']			=  $this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	
 	public function multiple_order_delete($id = null){
 		if($this->Login_model->is_admin_logged_in() ){
			foreach($_POST['checkbox'] as $id){
				$this->OrderModel->multiple_order_delete($id);
			}
			redirect('order/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	////////////////
	public function order_details($orderid =null){
		if($this->Login_model->is_admin_logged_in() ){
			$data['order']			=	'order_single';
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['prodinfo']  		= $this->OrderdetailsModel->this_user_order_product_details($orderid);
			$data['orderde']  		= $this->OrderdetailsModel->this_or_informaion($orderid);
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']			=  $this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
}