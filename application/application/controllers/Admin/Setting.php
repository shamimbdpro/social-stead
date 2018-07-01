<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function store_setting(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['Setting']	=	'store_setting';
			$data['setngactv']	=	'active';
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		= $this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


	public function message(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['Setting']	=	'message';
			$data['messac']	=	'active';
			$data['alldata']   =	$this->Setting_model->all_msg_find();
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		= $this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	
	
	public function message_view_details($id = null){
		if($this->Login_model->is_admin_logged_in() ){
			$data['Setting']	=	'message_view';
			$data['messac']	    =	'active';
			$data['thismsg']    =	$this->Setting_model->this_msg_find($id);
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		= $this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function owener_information(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['Informaiton']=	'owner_information';
			$data['owenerinfo']	=	'active';
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		= 	$this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}



	public function store_logo(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['Informaiton']	=	'logo';
			$data['logoactv']	=	'active';
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		= $this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	/////////////////////////////////////////////////////////////

	public function store_view(){
		if($this->Login_model->is_admin_logged_in() ){		
			$data['store_view']	=	'store_view';
			$data['setngactv']	=	'active';
			$data['view']		=	$this->Setting_model->store_data_view();
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		= $this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}



	public function owener_view(){
		if($this->Login_model->is_admin_logged_in() ){		
			$data['owener_view']	=	'owener_view';
			$data['logo']			=	$this->Setting_model->logo_find();
			$data['Owenerview']		=	$this->Setting_model->owener_information_data_view();
			$data['store']		= $this->Setting_model->store_data_view();
			$data['icon']		=	$this->Setting_model->store_icon();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

////////////////////////////////////////////////////////////////////////////////////

	public function store_setting_check(){
		if($this->Login_model->is_admin_logged_in() ){		
			$this->form_validation->set_rules('store_name','Store Name','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('store_url','Store Url','trim|xss_clean|min_length[6]');
			$this->form_validation->set_rules('address','Address','trim|xss_clean|min_length[8]');
			$this->form_validation->set_rules('telephone','Telephone','trim|xss_clean|min_length[9]');
			$this->form_validation->set_rules('phone','Phone','trim|xss_clean|min_length[10]');
			$this->form_validation->set_rules('email','Email','trim|xss_clean|min_length[12]');
			$this->form_validation->set_rules('supprot_email','Supprot Email','trim|xss_clean|min_length[12]');
			$this->form_validation->set_rules('facebook','Facebook','trim|xss_clean|min_length[12]');
			$this->form_validation->set_rules('twitter','Twitter','trim|xss_clean|min_length[11]');
			$this->form_validation->set_rules('google','Google','trim|xss_clean|min_length[9]');
			$this->form_validation->set_rules('skype','Skype','trim|xss_clean|min_length[9]');
			$this->form_validation->set_rules('pinterest','Pinterest','trim|xss_clean|min_length[13]');
			$this->form_validation->set_rules('linkedin','Linkedin','trim|xss_clean|min_length[12]');
			$this->form_validation->set_rules('vimeo','Vimeo','trim|xss_clean|min_length[9]');
			$this->form_validation->set_rules('some_info','Information','trim|xss_clean|min_length[50]');

			if($this->form_validation->run() == FALSE){
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['Setting']	=	'store_setting';
				$this->load->view('dashboard_layout',$data);
			}else{
				if($this->Setting_model->store_setting_data_update()){
					$data['message']="Data Update Successfully!";
					$this->session->set_userdata($data);
					redirect('storesetting/');
				}else{
					$data['message']="Pls try again!";
					$this->session->set_userdata($data);
					redirect('storesetting/');
				}
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


	/////////////////////////////////////////////////////////////////////////////////////////////////////
	public function company_logo_check(){
		if($this->Login_model->is_admin_logged_in() ){		
			if($file_name = $this->logo_image_upload() ){
				$data=array("image" => $file_name);

				$this->logo_image_resize($file_name);
				if($this->Setting_model->logo_update($file_name)){
						$data['message']="Logo Upload Successfully!";
						$this->session->set_userdata($data);
						redirect('logo/');
				}else{
					$data['message2']="Logo Upload Not Successfully!";
					$this->session->set_userdata($data);
					redirect('logo/');
				}
				
			}else{
				$data['message3']="Logo Upload Failed!";
				$this->session->set_userdata($data);
				redirect('logo/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function logo_image_upload(){
		if($this->Login_model->is_admin_logged_in() ){		
			$type = explode('.', $_FILES['Company_logo']['name']);
			$type = $type[count($type)-1];
			$file_name= uniqid(rand()).'.'.$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPEG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['Company_logo']['tmp_name'] ) ){

					move_uploaded_file( $_FILES['Company_logo']['tmp_name'], './libs/image/'.$file_name );
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

	public	function logo_image_resize($sourse){
		if($this->Login_model->is_admin_logged_in() ){		
			$config['image_library'] = 'gd2';
			$config['source_image'] = './libs/image/'.$sourse;
			$config['new_image'] = './libs/image/Company_logo/';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 260;
			$config['height'] = 54;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

////////////////////////////store logo/////////////////////////////////////////////////



//////////////////////company icon///////////////////////////////

	/////////////////////////////////////////////////////////////////////////////////////////////////////
	public function company_icon_check(){
		if($this->Login_model->is_admin_logged_in() ){		
			if($file_name = $this->icon_image_upload() ){
				$data=array("image" => $file_name);

				$this->icon_image_resize($file_name);
				if($this->Setting_model->icon_update($file_name)){
						$data['message']="Logo Upload Successfully!";
						$this->session->set_userdata($data);
						redirect('icon/');
				}else{
					$data['message2']="Logo Upload Not Successfully!";
					$this->session->set_userdata($data);
					redirect('logo/');
				}
				
			}else{
				$data['message3']="Logo Upload Failed!";
				$this->session->set_userdata($data);
				redirect('icon/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	public function icon_image_upload(){
		if($this->Login_model->is_admin_logged_in() ){		
			$type = explode('.', $_FILES['Company_logo']['name']);
			$type = $type[count($type)-1];
			$file_name= uniqid(rand()).'.'.$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPEG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['Company_logo']['tmp_name'] ) ){

					move_uploaded_file( $_FILES['Company_logo']['tmp_name'], './libs/image/'.$file_name );
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

	public	function icon_image_resize($sourse){
		if($this->Login_model->is_admin_logged_in() ){		
			$config['image_library'] = 'gd2';
			$config['source_image'] = './libs/image/'.$sourse;
			$config['new_image'] = './libs/image/Company_logo/';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 50;
			$config['height'] = 50;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

/////////////////////////company icon////////////////////////////////////////////


	public function owener_information_data_check(){
		if($this->Login_model->is_admin_logged_in() ){	
			$this->form_validation->set_rules('first_name','First Name','trim|xss_clean|min_length[2]');
			$this->form_validation->set_rules('last_name','Last Name','trim|xss_clean|min_length[3]');
			$this->form_validation->set_rules('email','Email','trim|xss_clean|min_length[11]');
			$this->form_validation->set_rules('phone','Phone','trim|xss_clean|min_length[11]');
			$this->form_validation->set_rules('facebook','Facebook','trim|xss_clean');
			$this->form_validation->set_rules('twitter','Twitter','trim|xss_clean');
			$this->form_validation->set_rules('google','Google','trim|xss_clean');
			$this->form_validation->set_rules('skype','Skype','trim|xss_clean');
			$this->form_validation->set_rules('about','about','trim|xss_clean');
			if($this->form_validation->run() == FALSE){
				$data['logo']		=	$this->Setting_model->logo_find();
				$data['Setting']	=	'owner_information';
				$this->load->view('dashboard_layout',$data);
			}else{

				if($file_name = $this->upload_owener_image() ){
					$this->product_fechared_resize($file_name);
					if($this->Setting_model->owener_information_data_update($file_name)){
							$data['message']="Data Insert Successfully!";
							$this->session->set_userdata($data);
							redirect('owner/information/');
					}else{
						$data['message2']="Data Insert Not Successfully!";
						$this->session->set_userdata($data);
						redirect('owner/information/');
					}
					
				}else{
					$data['message3']="Warning!";
					$this->session->set_userdata($data);
					redirect('owner/information/');
				}
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

	//owener image upload
	public function upload_owener_image(){
		if($this->Login_model->is_admin_logged_in() ){	
			$type = explode('.', $_FILES['owener_image']['name']);
			$type = $type[count($type)-1];
			$file_name= "./libs/image/owener_image/".uniqid(rand()).".".$type;

			if( in_array($type, array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'PNG', 'JPEG', 'GIF' )) ){

					if( is_uploaded_file( $_FILES['owener_image']['tmp_name'] ) ){

					move_uploaded_file( $_FILES['owener_image']['tmp_name'],$file_name );
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

	//slider image resize
	public function product_fechared_resize($file_name){
		if($this->Login_model->is_admin_logged_in() ){	
			$config['image_library'] = 'gd2';
			$config['source_image'] = './libs/image/owener_image/'.$file_name;
			$config['new_image'] = './libs/image/';
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = FALSE;
			$config['width'] = 100;
			$config['height'] = 80;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}


////////////////////public function store_icon ////////////////////////////////////





	 //payment method in
	 public function payment_method_integration(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['Informaiton']=	'payment';
			$data['paymentm']	=	'active';
			$data['icon']		=	$this->Setting_model->store_icon();
			$data['logo']		=	$this->Setting_model->logo_find();
			$data['store']		=   $this->Setting_model->store_data_view();
			$data['paypalp']	= $this->Setting_model->find_paypal();
			$this->load->view('dashboard_layout',$data);
		}else{
			redirect('social-admin/?logged-in-first');
		}
	 }



	 public function payment(){
		if($this->Login_model->is_admin_logged_in() ){
			if($this->Setting_model->payme_up()){
	            $data['message']="Data Insert Successfully!";
	            $this->session->set_userdata($data);
				redirect('payment/');
			}
			else{
				$data['message2']="Data Insert Not Success!";
				$this->session->set_userdata($data);
				redirect('payment/');
			}
		}else{
			redirect('social-admin/?logged-in-first');
		}
	 }

}