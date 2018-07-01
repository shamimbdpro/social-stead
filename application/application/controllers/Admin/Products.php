<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->model('Category_model');

	}

	public function index(){
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function add_product(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']			=  $this->Setting_model->store_icon();
			$data['add_product']	=	'add_product';
			$data['prodactive']		=	'active';
			$data['homeslop']		=	'open';
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


	public function manage_product(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['store']			= $this->Setting_model->store_data_view();
			$data['icon']			=  $this->Setting_model->store_icon();
			$data['alldata']		=	$this->ServiceModel->all_service_find_tow();
			$data['add_product']	=	'manage_product';
			$data['prodsactive']	=	'active';
			$data['homeslop']		=	'open';
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}





	public function aservice_type(){
		$data['alldata']        = $this->ServiceModel->all_service_find();
		$data['logo']			=	$this->Setting_model->logo_find();
		$data['store']			= $this->Setting_model->store_data_view();
		$data['icon']			=  $this->Setting_model->store_icon();
		$data['hometslop']		=	'open';
		$data['ssprodactived']	=	'active';
		$data['add_product']    = 'service_type';
		$this->load->view('dashboard_layout',$data);
	}
	public function aservice_typem(){
		$data['alldata']        = $this->ServiceModel->all_service_ty_find();
		$data['logo']			=	$this->Setting_model->logo_find();
		$data['store']			= $this->Setting_model->store_data_view();
		$data['icon']			=  $this->Setting_model->store_icon();
		$data['hometslop']		=	'open';
		$data['sprodadctived']	=	'active';
		$data['add_product']    = 'service_typem';
		$this->load->view('dashboard_layout',$data);
	}


	public function aservice_types(){
  		if($this->Login_model->is_admin_logged_in() ){
			$this->form_validation->set_rules('CategroyId','Category Name','trim|xss_clean|min_length[1]');
			$this->form_validation->set_rules('servicename','Service Name','trim|xss_clean|min_length[3]');
			$this->form_validation->set_rules('servicetype','Service Type','trim|xss_clean|min_length[3]');
			if($this->form_validation->run() == FALSE){
				//$data['SameIdData']	= $this->Products_model->same_id_all_data($product_id);
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['store']		= 	$this->Setting_model->store_data_view();
				$data['icon']		=  	$this->Setting_model->store_icon();
				$data['alldata']        = $this->ServiceModel->all_service_find();
				$data['hometslop']		=	'open';
				$data['sprodadctived']	=	'active';
				$data['add_product']    = 'service_type';
				$this->load->view('dashboard_layout',$data);
			}
			else{
				if($this->ServiceModel->service_type_insert() ){
					$data['message']="Size Insert Successfully!";
					$this->session->set_userdata($data);
					redirect('service-type/manage/');
				}else{
					$data['message']="Size Insert Not Successfully!";
					$this->session->set_userdata($data);
					redirect('service-type/');
				}
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	//////////////////////////
	public function aservice_pack(){
		$data['list']		 	=	$this->ServiceModel->getcategory();
		$data['logo']			=	$this->Setting_model->logo_find();
		$data['store']			= $this->Setting_model->store_data_view();
		$data['icon']			=  $this->Setting_model->store_icon();
		$data['serpack']	    =	'active';
		$data['spackp']	    =	'open';
		$data['add_product']    = 'service_pack';
		$this->load->view('dashboard_layout',$data);
	}

	public function aservice_pack_manage(){
		$data['list']		 	=	$this->ServiceModel->getcategory();
		$data['logo']			=	$this->Setting_model->logo_find();
		$data['store']			= $this->Setting_model->store_data_view();
		$data['icon']			=  $this->Setting_model->store_icon();
		$data['AllData']        = $this->ServiceModel->all_services_pack_find();
		$data['serpackm']	    =	'active';
		$data['spackp']	    	=	'open';
		$data['add_product']    = 'service_pack_manage';
		$this->load->view('dashboard_layout',$data);
	}

	public function aservice_packs(){
  		if($this->Login_model->is_admin_logged_in() ){
			$this->form_validation->set_rules('categoryId','Category Name','trim|xss_clean|min_length[1]');
			$this->form_validation->set_rules('subCategoryId','Subcategory Name','trim|xss_clean|min_length[1]');
			$this->form_validation->set_rules('servicepname','Pack Name','trim|xss_clean|min_length[3]');
			$this->form_validation->set_rules('price','Price','trim|xss_clean|min_length[1]');
			
			
			if($this->form_validation->run() == FALSE){
				//$data['SameIdData']	= $this->Products_model->same_id_all_data($product_id);
				$data['list']		 	=	$this->ServiceModel->getcategory();
				$data['logo']			=	$this->Setting_model->logo_find();
				$data['store']			= $this->Setting_model->store_data_view();
				$data['icon']			=  $this->Setting_model->store_icon();
				$data['serpack']	    =	'active';
				$data['spackp']	    =	'open';
				$data['add_product']    = 'service_pack';
				$this->load->view('dashboard_layout',$data);
			}
			else{

				if($file_name = $this->product_image_upload() ){
					$data=array("image" => $file_name);

					$this->product_image_resize($file_name);
					if($this->ServiceModel->service_pack_insert($file_name)){
							$data['message']="Data Insert Successfully!";
							$this->session->set_userdata($data);
							redirect('service-packs/');
					}else{
						$data['message2']="Data Insert Not Successfully!";
						$this->session->set_userdata($data);
						redirect('service-packs/');
					}
					
				}else{
					$data['message3']="Image Upload Failed!";
					$this->session->set_userdata($data);
					redirect('service-packs/');
				}

			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function product_image_upload(){
		if($this->Login_model->is_admin_logged_in() ){
			$type = explode('.', $_FILES['product_photos']['name']);
			$type = $type[count($type)-1];
			$file_name= uniqid(rand()).'.'.$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPEG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['product_photos']['tmp_name'] ) ){

					move_uploaded_file( $_FILES['product_photos']['tmp_name'], './libs/image/'.$file_name );
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

	public	function product_image_resize($sourse){
		if($this->Login_model->is_admin_logged_in() ){
			 $this->load->library('image_lib');


			 /* Second size */    
			 $configSize2['image_library']   = 'gd2';
			 $configSize2['source_image'] = './libs/image/'.$sourse;
			 $configSize2['create_thumb']    = FALSE;
			 $configSize2['maintain_ratio']  = TRUE;
			 $configSize2['width']           = 450;
			 $config['quality']   			 = '100';
			 $configSize2['height']          = 450;
			 $configSize2['new_image'] = './libs/image/product_Zoom/';

			 $this->image_lib->initialize($configSize2);
			 $this->image_lib->resize();
			 $this->image_lib->clear();
		 
			 $configSize1['image_library']   = 'gd2';
			 $configSize1['source_image'] = './libs/image/'.$sourse;
			 $configSize1['create_thumb']    = FALSE;
			 $configSize1['maintain_ratio']  = TRUE;
			 $configSize1['width']           = 300;
			 $config['quality']   			 = '100';
			 $configSize1['height']          = 300;
			 $configSize1['new_image'] = './libs/image/products_image/';

			 $this->image_lib->initialize($configSize1);
			 $this->image_lib->resize();
			 $this->image_lib->clear();
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	//this code is use for category popular publish 
	public function publish($id = null){
		if($this->Login_model->is_admin_logged_in() ){
		    $this->ServiceModel->publish($id);
		    redirect('manage/products/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
  	}
  	//this code is use for category popular unpublish
    public function unpublish($id = null){
		if($this->Login_model->is_admin_logged_in() ){
		    $this->ServiceModel->unpublish($id);
		    redirect('manage/products/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
  	}

	//this code is use for category popular publish 
	public function type_publish($id = null){
		if($this->Login_model->is_admin_logged_in() ){
		    $this->ServiceModel->type_publish($id);
		    redirect('service-type/manage/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
  	}
  	//this code is use for category popular unpublish
    public function type_unpublish($id = null){
		if($this->Login_model->is_admin_logged_in() ){
		    $this->ServiceModel->type_unpublish($id);
		    redirect('service-type/manage/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
  	}

	//this code is use for category's delete
	public function service_type_delet($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			if($this->ServiceModel->service_type_delet($id)){
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







//pack publicsh unpublish



	public function serpublish($id = null){
		if($this->Login_model->is_admin_logged_in() ){
		    $this->ServiceModel->serpublish($id);
		    redirect('service-packs/manage/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
  	}
  	//this code is use for category popular unpublish
    public function serunpublish($id = null){
		if($this->Login_model->is_admin_logged_in() ){
		    $this->ServiceModel->serunpublish($id);
		    redirect('service-packs/manage/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
  	}


public function packdelet($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			if($this->ServiceModel->service_pack_delet($id)){
	            $data['message']="Data Delete Successfully!";
	            $this->session->set_userdata($data);
				redirect('service-packs/manage/');
			}
			else{
				$data['message2']="Data Delete Not Success!";
				$this->session->set_userdata($data);
				redirect('service-packs/manage/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
}






}
