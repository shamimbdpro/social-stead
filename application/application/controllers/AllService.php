<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AllService extends CI_Controller {

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	public function all_service()
	{
		$data['logo']		= $this->Setting_model->logo_find();
		$data['Header']     = 'header';
		$data['OService']   = 'o_service';
		$data['AllSer']     = $this->ServiceModel->all_service_find();
		$this->load->view('welcome_message',$data);
	}


	public function service_datails($id = null){
		$data['logo']		= $this->Setting_model->logo_find();
		$data['Header']     = 'header';
		$data['ServiceD']    = 'service_detai';
		$data['alldata']     = $this->ServiceModel->this_service_type_find($id);
		$data['thisdata']    = $this->ServiceModel->this_service_find($id);
		$this->load->view('welcome_message',$data);
	}

	public function service_packag($id = null){
		$data['logo']		= $this->Setting_model->logo_find();
		$data['Header']     = 'header';
		$data['ServiceD']    = 'service_pack';
		$data['alld']		=		$this->ServiceModel->this_all_services_pack_find($id);
		$data['alldata']     = $this->ServiceModel->this_service_pack_find($id);
		$this->load->view('welcome_message',$data);
	}

	public function addcart($id = null){
		$data['logo']		= $this->Setting_model->logo_find();
		$data['logo']		= $this->Setting_model->logo_find();
		$data['thisdata']    = $this->ServiceModel->this_pack_find($id);
		$this->load->view('Home/addtocart',$data);
	}


	public function service_add(){
  		if($this->Login_model->is_admin_logged_in() ){
			$this->form_validation->set_rules('serviceicon','Service Icone','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('servicename','Service Name','trim|xss_clean|min_length[3]');
			
			if($this->form_validation->run() == FALSE){
				//$data['SameIdData']	= $this->Products_model->same_id_all_data($product_id);
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['store']		= 	$this->Setting_model->store_data_view();
				$data['icon']		=  	$this->Setting_model->store_icon();
				$data['products']	=	'add_product';
				$this->load->view('dashboard_layout',$data);
			}
			else{
				if($this->ServiceModel->service_insert() ){
					$data['message']="Data Insert Successfully!";
					$this->session->set_userdata($data);
					redirect('manage/products/');
				}else{
					$data['message']="Data Insert Not Successfully!";
					$this->session->set_userdata($data);
					redirect('manage/products/');
				}
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


	//this code is use for category's delete
	public function service_delet($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			if($this->ServiceModel->service_delet($id)){
	            $data['message']="Data Delete Successfully!";
	            $this->session->set_userdata($data);
				redirect('manage/products/');
			}
			else{
				$data['message2']="Data Delete Not Success!";
				$this->session->set_userdata($data);
				redirect('manage/products/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}



/*	public function menuinsert(){
		$data['logo']			=	$this->Setting_model->logo_find();
		$data['store']			=   $this->Setting_model->store_data_view();
		$data['icon']			=   $this->Setting_model->store_icon();
		$data['add_product']	=	'menuad';
		$data['menuinac']		=	'active';
		$data['menuop']		=	'open';
		$this->load->view('dashboard_layout',$data);
	}
	public function menumanage(){
		$data['logo']			=	$this->Setting_model->logo_find();
		$data['store']			=   $this->Setting_model->store_data_view();
		$data['icon']			=   $this->Setting_model->store_icon();
		$data['add_product']	=	'menumng';
		$data['menuac']		    =	'active';
		$data['menuop']		=	'open';
		$this->load->view('dashboard_layout',$data);
	}
*/





}
