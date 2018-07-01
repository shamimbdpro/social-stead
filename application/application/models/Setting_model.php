<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('login_page');
	}

	// store setting information data insert
	public function store_setting_data_update(){
		$attr = array(
			'store_name'   		 	 =>  $this->input->post('store_name'),
			'store_url'   			 =>  $this->input->post('store_url'),
			'store_address'   		 =>  $this->input->post('address'),
			'store_telephone'   	 =>  $this->input->post('telephone'),
			'store_phone'   		 =>  $this->input->post('phone'),
			'store_email'   		 =>  $this->input->post('email'),
			'supprot_email'   		 =>  $this->input->post('supprot_email'),
			'exchange'   			 =>  $this->input->post('exchange'),
			'facebook'   		 	 =>  $this->input->post('facebook'),
			'twitter'   			 =>  $this->input->post('twitter'),
			'google'   		 		 =>  $this->input->post('google'),
			'skype'   	 			 =>  $this->input->post('skype'),
			'pinterest'   		 	 =>  $this->input->post('pinterest'),
			'linkedin'   			 =>  $this->input->post('linkedin'),
			'vimeo'   				 =>  $this->input->post('vimeo'),
			'some_info'   				 =>  $this->input->post('some_info'),
			);
		$update = $this->db->update('store_setting',$attr);

		if($update){
			return true;
		}
		else{
			return false;
		}
	}

	//store setting information data view
	public function store_data_view(){
		$query	=	$this->db->get('store_setting');
		$results	=	$query->result();
		//var_dump($results);
		//exit();
		return $results;
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//store setting information data view
	public function owener_information_data_view(){
		$query	=	$this->db->get('owener_information');
		$results	=	$query->result();
		//var_dump($results);
		//exit();
		return $results;
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	public function logo_update($file_name = null){
		$attr	=	array(
			'company_logo'				=>	$file_name,
			);	
		$update = $this->db->update('logo',$attr);

		if($update){
			return true;
		}
		else{
			return false;
		}
	}


	public function payme_up(){
		$attr	=	array(
			'b_email'				=>	$this->input->post('paymbusmail'),
			);	
		$update = $this->db->update('paypal',$attr);

		if($update){
			return true;
		}
		else{
			return false;
		}
	}


	public function find_paypal(){
		$query	=	$this->db->get('paypal');
		$results	=	$query->result();
		return $results;
	}





	public function logo_find(){
		$query	=	$this->db->get('logo');
		$results	=	$query->result();
		return $results;
	}



	///////////////////////////////////////////////
	public function owener_information_data_update(){
		$attr=array(
			"owener_first_name" 	=> 	$this->input->post('first_name'),
			"owener_last_name" 		=> 	$this->input->post('last_name'),
			"owener_email" 			=> 	$this->input->post('email'),
			"owener_phone" 			=> 	$this->input->post('phone'),
			"owener_face" 			=> 	$this->input->post('facebook'),
			"owener_twi" 			=> 	$this->input->post('twitter'),
			"owener_goo" 			=> 	$this->input->post('google'),
			"owener_sky" 			=> 	$this->input->post('skype'),
			"owener_about" 			=> 	$this->input->post('about'),
			"owener_image_link" 	=>	$file_name,
			);
		$update = $this->db->update('owener_information', $attr);

		if($update){
			return true;
		}
		else{
			return false;
		}
	}


	//// store icon setting
	public function store_icon(){
		$query	=	$this->db->get('icon');
		$results	=	$query->result();
		return $results;
	}

///////////////////////////////////////////////////////////////////////////////////

	public function icon_update($file_name = null){
		$attr	=	array(
			'company_icon'				=>	$file_name,
			);	
		$update = $this->db->update('icon',$attr);

		if($update){
			return true;
		}
		else{
			return false;
		}
	}

	public function icon_find(){
		$query	=	$this->db->get('icon');
		$results	=	$query->result();
		return $results;
	}

	public function all_msg_find(){
	    $this->db->select('*');
	    $this->db->from('message');
	    //$this->db->where('status',1);
		$this->db->order_by('id','desc');
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}
	
	
	public function this_msg_find($id = null){

		$attr	= array(
			'id'	=>	$id
			);
		$query	=	$this->db->get_where('message',$attr);
		if($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}

}