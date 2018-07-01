<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct() {
		$this->tableName = 'users';
		$this->primaryKey = 'id';
		$this->tableNametwo = 'shipping_address';
	}


	public function index(){

	}

	public function checkUser($data = array()){
		$this->db->select($this->primaryKey);
		$this->db->from($this->tableName);
		$this->db->where(array('oauth_provider'=>$data['oauth_provider'],'oauth_uid'=>$data['oauth_uid']));
		$prevQuery = $this->db->get();
		$prevCheck = $prevQuery->num_rows();
		
		if($prevCheck > 0){
			$prevResult = $prevQuery->row_array();
			$data['modified'] = date("Y-m-d H:i:s");
			$update = $this->db->update($this->tableName,$data,array('id'=>$prevResult['id']));
			$userID = $prevResult['id'];
		}else{
			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$insert = $this->db->insert($this->tableName,$data);
			$userID = $this->db->insert_id();


			$data['created'] = date("Y-m-d H:i:s");
			$data['modified'] = date("Y-m-d H:i:s");
			$inserttwo = $this->db->insert($this->tableNametwo,$data);
			$userID = $this->db->insert_id();
		}

		return $userID?$userID:FALSE;
    }


 	public function get_facebook_user_data(){
		$query	=	$this->db->get('users');
		$results	=	$query->result();
		return $results;
	}









	public function coustomer_data_insert(){
		$password	=	md5($this->input->post('password_again'));
		$attr	=	array(
			'first_name'			=>	$this->input->post('first_name'),
			'last_name'				=>	$this->input->post('last_name'),
			'username'				=>	$this->input->post('username'),
			'email'					=>	$this->input->post('email'),
			'state'					=>	$this->input->post('state'),
			'city'					=>	$this->input->post('city'),
			'telephone'				=>	$this->input->post('phone'),
			'postal_code'			=>	$this->input->post('postal_code'),
			'address'				=>	$this->input->post('address'),
			'password'				=>	$password,
			);	
		$insert	=	$this->db->insert('users',$attr);
		$insert_id = $this->db->insert_id();

		$attrdd	=	array(
			'first_name'			=>	$this->input->post('first_name'),
			'last_name'				=>	$this->input->post('last_name'),
			'username'				=>	$this->input->post('username'),
			'email'					=>	$this->input->post('email'),
			'state'					=>	$this->input->post('state'),
			'city'					=>	$this->input->post('city'),
			'telephone'				=>	$this->input->post('phone'),
			'postal_code'			=>	$this->input->post('postal_code'),
			'address'				=>	$this->input->post('address'),
			'user_id'				=>	$insert_id,
			);	
		$insert	=	$this->db->insert('shipping_address',$attrdd);


		$attr	=	array(
			'current_user_id'		=>	$insert_id,
			);
		$this->session->set_userdata($attr);

		if($insert){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function new_coustomer_data_with_billinginfo_insert(){
		$password	=	md5($this->input->post('password'));

		$attr	=	array(
			'first_name'			=>	$this->input->post('first_name'),
			'last_name'				=>	$this->input->post('last_name'),
			'company_name'			=>	$this->input->post('company_name'),
			'email'					=>	$this->input->post('email'),
			'address'				=>	$this->input->post('address'),
			'state'					=>	$this->input->post('Province'),
			'postal_code'			=>	$this->input->post('postal_code'),
			'country'				=>	$this->input->post('Country'),
			'telephone'				=>	$this->input->post('telephone'),
			'username'				=>	$this->input->post('username'),
			'password'				=>	$password,
			);	
		$insert	=	$this->db->insert('users',$attr);
		if($insert){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}


	//user login data check in database
	public function coustomer_login_data_check(){
		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
		$email 			= 	$this->input->post('email');
		$password 		=	md5($this->input->post('password'));

		$attar = array(
			'email'				=>			$email,
			'password'			=>			$password,
			);
		$result  =  $this->db->get_where('users',$attar);
		if($result->num_rows()  == 1){
			$attr	=	array(
				'current_user_id'		=>	$result->row(0)->id,
				'current_user_email'	=>	$email,
				'current_user_name'		=>	$result->row(20)->username,
				);
			$this->session->set_userdata($attr);
			$attard = array(
				'name'		=>	$this->session->userdata('current_user_id'),
				'user_name'	=>	$this->session->userdata('current_user_name'),
				'agent' 	=>	$this->agent->browser(),
				'ip' 		=>	$this->input->ip_address(),
				'platform'	=>  $this->agent->platform(),
				'date'		=>	$dt->format('F j, Y'),
				'time'		=>	$dt->format('g:i a'),
				'activity' 	=>	1,
			);
			$this->db->insert('online_user_activity',$attard);
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	//is user logged in
	public function is_user_logged_in(){
		return $this->session->userdata('current_user_id') != FALSE;
	}

	//is facebook user logged in
	public function is_facebook_user_logged_in(){
		return $this->session->userdata('current_fb_user_id') != FALSE;
	}

	//is google user logged in
	public function is_google_user_logged_in(){
		return $this->session->userdata('current_google_user_id') != FALSE;
	}

	//is twitter user logged in
	public function is_twitter_logged_in(){
		return $this->session->userdata('current_twitter_user_id') != FALSE;
	}
//order details
	public function user_order_information_update(){
		$fbid 	= $this->session->userdata('current_fb_user_id');
		$gogleid = $this->session->userdata('current_google_user_id');
		$userid = $this->session->userdata('current_user_id');
		$twiterid = $this->session->userdata('current_twitter_user_id');

		$password	=	md5($this->session->userdata('password'));
		$today = date("Ymd");
		$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
		$unique = $today . $rand;

		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));


		if($fbid){
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('oauth_uid',$fbid);
			$query	=	$this->db->update('users',$attr);


			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $fbid,
					);
			$this->db->where('oauth_uid',$fbid);
			$query	=	$this->db->update('shipping_address',$attr);
				
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			      'user_id'		  => $fbid,
					);
			$this->db->where('oauth_uid',$fbid);
			$query	=	$this->db->update('shipping_address',$attr);

			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $fbid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $fbid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

		
			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   =>	$dt->format('F j, Y'),
					'time'		   =>	$dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $fbid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'sales_id'     => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('lname');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('address');
				$this->session->unset_userdata('state');
				$this->session->unset_userdata('city');
				$this->session->unset_userdata('postal_code');
				$this->session->unset_userdata('password');
				$this->session->unset_userdata('mobile');
				$this->session->unset_userdata('transation');
				$this->cart->destroy();
				return TRUE;
		}elseif($gogleid){
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('oauth_uid',$gogleid);
			$query	=	$this->db->update('users',$attr);

			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $gogleid,
					);
			$this->db->where('oauth_uid',$gogleid);
			$query	=	$this->db->update('shipping_address',$attr);
				
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			      'user_id'		  => $gogleid,
					);
			$this->db->where('oauth_uid',$gogleid);
			$query	=	$this->db->update('shipping_address',$attr);
			
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $gogleid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $gogleid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

		
			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   =>	$dt->format('F j, Y'),
					'time'		   =>	$dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $gogleid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'sales_id'     => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('lname');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('address');
				$this->session->unset_userdata('state');
				$this->session->unset_userdata('city');
				$this->session->unset_userdata('postal_code');
				$this->session->unset_userdata('password');
				$this->session->unset_userdata('mobile');
				$this->session->unset_userdata('transation');
				$this->cart->destroy();
				return TRUE;
		}elseif($userid){
		$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$userfind = array(
				'id'	  =>			$userid,
				);
			$result  =  $this->db->get_where('users',$userfind);
			if($result){
				$insert = $this->db->update('users',$attr);
			}else{

			}

			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $userid,
					);
				if($result){
					$insert = $this->db->update('shipping_address',$attr);
				}else{

				}
				
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			      'user_id'		  => $userid,
					);
				$userfind = array(
					'user_id'	  =>			$userid,
					);
				$result  =  $this->db->get_where('users',$userfind);
				if($result){
					$insert = $this->db->update('shipping_address',$attr);
				}else{

				}
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $userid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $userid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

		
			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   =>	$dt->format('F j, Y'),
					'time'		   =>	$dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $userid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'sales_id'     => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('lname');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('address');
				$this->session->unset_userdata('state');
				$this->session->unset_userdata('city');
				$this->session->unset_userdata('postal_code');
				$this->session->unset_userdata('password');
				$this->session->unset_userdata('mobile');
				$this->session->unset_userdata('transation');
				$this->cart->destroy();
				return TRUE;
		}elseif($twiterid){
		$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('oauth_uid',$twiterid);
			$query	=	$this->db->update('users',$attr);

			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $twiterid,
					);
				$this->db->where('oauth_uid',$twiterid);
				$query	=	$this->db->update('shipping_address',$attr);
				
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			      'user_id'		  => $twiterid,
					);
				$userfind = array(
					'oauth_uid'	  =>			$twiterid,
					);
				$this->db->where('oauth_uid',$twiterid);
				$query	=	$this->db->update('shipping_address',$attr);
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $twiterid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $twiterid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

		
			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   =>	$dt->format('F j, Y'),
					'time'		   =>	$dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $twiterid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'sales_id'     => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

				$this->session->unset_userdata('fname');
				$this->session->unset_userdata('lname');
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('email');
				$this->session->unset_userdata('address');
				$this->session->unset_userdata('state');
				$this->session->unset_userdata('city');
				$this->session->unset_userdata('postal_code');
				$this->session->unset_userdata('password');
				$this->session->unset_userdata('mobile');
				$this->session->unset_userdata('transation');
				$this->cart->destroy();
				return TRUE;
		}else{
			return FALSE;
		}
	}
	public function user_order_information_insert() {
		$id 		= $this->session->userdata('current_user_id');
		$fbid 		= $this->session->userdata('current_fb_user_id');
		$googleid 	= $this->session->userdata('current_google_user_id');
		$twitterid 	= $this->session->userdata('current_twitter_user_id');

		$password	=	md5($this->session->userdata('password'));
		$today = date("Ymd");
		$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
		$unique = $today . $rand;
		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));

		if($id){
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('id',$id);
			$insert = $this->db->update('users',$attr);
			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      //'user_id'		  => $id,
					);
				$this->db->where('user_id',$id);
				$insert = $this->db->insert('shipping_address',$attr);
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			     // 'user_id'		  => $id,
					);
				$this->db->where('user_id',$id);
				$insert = $this->db->insert('shipping_address',$attr);
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $id,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $id,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      /*'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),*/
		      'delivery'          => $this->session->userdata('delivery'),
		      
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   => $dt->format('F j, Y'),
					'time'		   => $dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $id,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'size'        => $items['size'],
	      			'color'		  => $items['color'],
	      			'sales_id'    => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('state');
			$this->session->unset_userdata('city');
			$this->session->unset_userdata('postal_code');
			$this->session->unset_userdata('password');
			$this->session->unset_userdata('telephone');
			
			$this->session->unset_userdata('fname2');
			$this->session->unset_userdata('lname2');
			$this->session->unset_userdata('email2');
			$this->session->unset_userdata('address2');
			$this->session->unset_userdata('state2');
			$this->session->unset_userdata('city2');
			$this->session->unset_userdata('telephone2');
			$this->cart->destroy();
			return TRUE;
		}elseif($fbid){
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('id',$fbid);
			$insert = $this->db->update('users',$attr);
			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $fbid,
					);
				$this->db->where('user_id',$fbid);
				$insert = $this->db->insert('shipping_address',$attr);
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			     'user_id'		  => $fbid,
					);
				$this->db->where('user_id',$fbid);
				$insert = $this->db->insert('shipping_address',$attr);
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $fbid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $fbid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      /*'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),*/
		      'delivery'          => $this->session->userdata('delivery'),
		      
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   => $dt->format('F j, Y'),
					'time'		   => $dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $fbid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'size'        => $items['size'],
	      			'color'		  => $items['color'],
	      			'sales_id'    => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('state');
			$this->session->unset_userdata('city');
			$this->session->unset_userdata('postal_code');
			$this->session->unset_userdata('password');
			$this->session->unset_userdata('telephone');
			
			$this->session->unset_userdata('fname2');
			$this->session->unset_userdata('lname2');
			$this->session->unset_userdata('email2');
			$this->session->unset_userdata('address2');
			$this->session->unset_userdata('state2');
			$this->session->unset_userdata('city2');
			$this->session->unset_userdata('telephone2');
			$this->cart->destroy();
			return TRUE;
		}elseif($googleid){
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('oauth_uid',$googleid);
			$insert = $this->db->update('users',$attr);
			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $googleid,
					);
				$this->db->where('user_id',$googleid);
				$insert = $this->db->insert('shipping_address',$attr);
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			     'user_id'		  => $googleid,
					);
				$this->db->where('user_id',$googleid);
				$insert = $this->db->insert('shipping_address',$attr);
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $googleid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $googleid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      /*'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),*/
		      'delivery'          => $this->session->userdata('delivery'),
		      
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   => $dt->format('F j, Y'),
					'time'		   => $dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $googleid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'size'        => $items['size'],
	      			'color'		  => $items['color'],
	      			'sales_id'    => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('state');
			$this->session->unset_userdata('city');
			$this->session->unset_userdata('postal_code');
			$this->session->unset_userdata('password');
			$this->session->unset_userdata('telephone');
			
			$this->session->unset_userdata('fname2');
			$this->session->unset_userdata('lname2');
			$this->session->unset_userdata('email2');
			$this->session->unset_userdata('address2');
			$this->session->unset_userdata('state2');
			$this->session->unset_userdata('city2');
			$this->session->unset_userdata('telephone2');
			$this->cart->destroy();
			return TRUE;
		}elseif($twitterid){
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$this->db->where('id',$fbid);
			$insert = $this->db->update('users',$attr);
			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $fbid,
					);
				$this->db->where('user_id',$fbid);
				$insert = $this->db->insert('shipping_address',$attr);
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			     'user_id'		  => $fbid,
					);
				$this->db->where('user_id',$fbid);
				$insert = $this->db->insert('shipping_address',$attr);
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $fbid,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $fbid,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      /*'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),*/
		      'delivery'          => $this->session->userdata('delivery'),
		      
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   => $dt->format('F j, Y'),
					'time'		   => $dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $fbid,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'size'        => $items['size'],
	      			'color'		  => $items['color'],
	      			'sales_id'    => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('state');
			$this->session->unset_userdata('city');
			$this->session->unset_userdata('postal_code');
			$this->session->unset_userdata('password');
			$this->session->unset_userdata('telephone');
			
			$this->session->unset_userdata('fname2');
			$this->session->unset_userdata('lname2');
			$this->session->unset_userdata('email2');
			$this->session->unset_userdata('address2');
			$this->session->unset_userdata('state2');
			$this->session->unset_userdata('city2');
			$this->session->unset_userdata('telephone2');
			$this->cart->destroy();
			return TRUE;
		}else{
			$attr = array(
		      'first_name' 	  => $this->session->userdata('fname'),
		      'last_name'     => $this->session->userdata('lname'),
		      'username'      => $this->session->userdata('username'),
		      'email'      	  => $this->session->userdata('email'),
		      'address'  	  => $this->session->userdata('address'),
		      'state'  	  	  => $this->session->userdata('state'),
		      'city'          => $this->session->userdata('city'),
		      'postal_code'   => $this->session->userdata('postal_code'),
		      'telephone'     => $this->session->userdata('telephone'),
		      'password'      => $password,
				);
			$insert = $this->db->insert('users',$attr);
			$data = $this->db->insert_id();

			$fnamemmmm = $this->session->userdata('fname2');
			if($fnamemmmm){
				$attr = array(
			      'first_name'    => $this->session->userdata('fname2'),
			      'last_name'     => $this->session->userdata('lname2'),
			      'email'         => $this->session->userdata('email2'),
			      'address'  	  => $this->session->userdata('address2'),
			      'city'     	  => $this->session->userdata('city2'),
			      'state'         => $this->session->userdata('state2'),
			      'telephone'     => $this->session->userdata('telephone2'),
			      'user_id'		  => $data,
					);
				$insert = $this->db->insert('shipping_address',$attr);
			}else{
				$attr = array(
			      'first_name'    => $this->session->userdata('fname'),
			      'last_name'     => $this->session->userdata('lname'),
			      'username'      => $this->session->userdata('username'),
			      'email'         => $this->session->userdata('email'),
			      'address'  	  => $this->session->userdata('address'),
			      'city'     	  => $this->session->userdata('city'),
			      'state'         => $this->session->userdata('state'),
			      'postal_code'   => $this->session->userdata('postal_code'),
			      'telephone'     => $this->session->userdata('telephone'),
			      'user_id'		  => $data,
					);
				$insert = $this->db->insert('shipping_address',$attr);	
			}
			$attrtwo = array(
			  'date'			  => $dt->format('F j, Y'),
			  'time'			  => $dt->format('g:i a'),
		      'user_id'     	  => $data,
		      'grand_total' 	  => $this->cart->format_number($this->cart->total()+99),
		      'order_id'    	  => $data,
		      'username'     	  => $this->session->userdata('username'),
		      'status'       	  => 'pending',
		      'payment_type'      => $this->session->userdata('payment_type'),
		      'random_order_id'	  => $unique,
		      /*'moblie_type'       => $this->session->userdata('moblie_type'),
		      'mobile'      	  => $this->session->userdata('mobile_number'),
		      'transation'        => $this->session->userdata('transation'),*/
		      'delivery'          => $this->session->userdata('delivery'),
		      
				);
			$inserttwo = $this->db->insert('sales_information',$attrtwo);

			$randid = array(

			);

			$data2 = $this->db->insert_id();

			foreach ($this->cart->contents() as $items){
				$order_detail = array(
					//'orderid' 		=> $ord_id,
					
					'product_id'   => $items['id'] ,
					'quantity' 	   => $items['qty'],
					'date'		   => $dt->format('F j, Y'),
					'time'		   => $dt->format('g:i a'),
				    'rate'         => $items['price'],
	      			'sub_total'    => $items['subtotal'],
	      			'user_id'      => $data,
	      			'product_name' => $items['name'],
	      			'prodcut_image_link' => $items['img'],
	      			'size'        => $items['size'],
	      			'color'		  => $items['color'],
	      			'sales_id'    => $data2,
				);		
			   $insertthree = $this->db->insert('sales_details',$order_detail);
			}

			$this->session->unset_userdata('fname');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('state');
			$this->session->unset_userdata('city');
			$this->session->unset_userdata('postal_code');
			$this->session->unset_userdata('password');
			$this->session->unset_userdata('telephone');
			
			$this->session->unset_userdata('fname2');
			$this->session->unset_userdata('lname2');
			$this->session->unset_userdata('email2');
			$this->session->unset_userdata('address2');
			$this->session->unset_userdata('state2');
			$this->session->unset_userdata('city2');
			$this->session->unset_userdata('telephone2');
			$this->cart->destroy();
			$attrs	=	array(
				'current_user_id'	=>	$data ,
				);
			$this->session->set_userdata($attrs);
			return TRUE;
		}

	}


public function this_time_order_details(){

}




//order details
function user_order_information_mobile_insert() {
		$today = date("Ymd");
		$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
		$unique = $today . $rand;

		$attr = array(
	      'first_name' 	  => $this->session->userdata('fname'),
	      'last_name'     => $this->session->userdata('lname'),
	      'username'      => $this->session->userdata('username'),
	      'email'      	  => $this->session->userdata('email'),
	      'address'  	  => $this->session->userdata('address'),
	      'state'  	  	  => $this->session->userdata('state'),
	      'city'          => $this->session->userdata('city'),
	      'postal_code'   => $this->session->userdata('postal_code'),
	     // 'country'       => $this->session->userdata('country'),
	      'password'      => $this->session->userdata('password'),
			);
		$insert = $this->db->insert('users',$attr);

		$data = $this->db->insert_id();

		/*$attr = array(
	      'first_name2'    => $this->session->userdata('fname2'),
	      'last_name2'     => $this->session->userdata('lname2'),
	      'email2'         => $this->session->userdata('email2'),
	      'address2'  	   => $this->session->userdata('address2'),
	      'telephone2'     => $this->session->userdata('telephone2'),
	      'city2'     	   => $this->session->userdata('password2'),
	      'state2'         => $this->session->userdata('Province2'),
	      'postal_code2'   => $this->session->userdata('city2'),
	      'country2'       => $this->session->userdata('postal_code2'),
	      'password2'      => $this->session->userdata('country2'),
	      'user_id'		   => $data,
			);
		$insert = $this->db->insert('shipping_address',$attr);*/

		$attr = array(
	      'date	' 			  => date("d/m/Y"),
	      'time'      		  => date('H:i:s'),
	      'user_id'     	  => $data,
	      'grand_total' 	  => $this->cart->format_number($this->cart->total()),
	      'order_id'    	  => $data,
	      'username'     	  => $this->session->userdata('username'),
	      'status'       	  => 'pending',
	      'payment_type'      => $this->session->userdata('payment_type'),
	      'moblie_type'      	  => $this->session->userdata('moblie_type'),
	      'mobile'      	  => $this->session->userdata('mobile'),
	      'transation'        => $this->session->userdata('transation'),
	      'random_order_id'	  => $unique
			);
		$insert = $this->db->insert('sales_information',$attr);



		$data2 = $this->db->insert_id();

	
		foreach ($this->cart->contents() as $items){
			$order_detail = array(
				//'orderid' 		=> $ord_id,
				'sales_id'     => $data2,
				'product_id'   => $items['id'] ,
				'quantity' 	   => $items['qty'],
			    'date	' 	   => date("d/m/Y"),
			    'time'         => date('H:i:s'),
			    'rate'         => $items['price'],
      			'sub_total'    => $items['subtotal'],
      			'user_id'      => $data,
      			'product_name' => $items['name'],
      			'prodcut_image_link' => $items['img'],

				//'quantity' 		=> $item['qty'],
				//'price' 		=> $item['price']
			);		

                            // Insert product imformation with order detail, store in cart also store in database. 
                
		   $insert = $this->db->insert('sales_details',$order_detail); 
		if($insert){
			return TRUE;
		}else{
			return FALSE;
		}

	}

}
//////////////////////////////////////////////////////////////////////
	//add_user_data_check
	public function add_user_data_insert(){
		$password	=	md5($this->input->post('password'));
		$attr	=	array(
			'first_name'		=>	$this->input->post('firstname'),
			'last_name'			=>	$this->input->post('lastname'),
			'email'				=>	$this->input->post('email'),
			'user_name'			=>	$this->input->post('username'),
			'password'			=>	$password,
	
			);	
		$insert	=	$this->db->insert('admin',$attr);
		if($insert){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function all_user_list(){
		$query	=	$this->db->get('admin');
		$results	=	$query->result();
		return $results;
	}

	public function all_customer_list(){
		$query	=	$this->db->get('users');
		$results	=	$query->result();
		return $results;
	}

	//user_delete
	public function user_delete($id = null){
		$this->db->delete('admin', array('id' => $id));
		if($this->db->affected_rows() ){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function edit_user($id = null){
		$attr	= array(
			'id'	=>	$id
			);
		$query	=	$this->db->get_where('admin',$attr);
		if($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}

	#edit_user_data_update

	public function edit_user_data_update($id = null){

		$old_password	=	md5($this->input->post('oldpassword'));

			$attr 	= array(
				'id'		=>	$id,
				'password'	=>	$old_password
			);

				$query	=	$this->db->get_where('admin',$attr);
				
				if($query->num_rows()	==	1){

					$password	=	md5($this->input->post('conpassword'));
					$attr	=	array(
						'first_name'		=>	$this->input->post('firstname'),
						'last_name'			=>	$this->input->post('lastname'),
						'user_name'			=>	$this->input->post('username'),
						'password'			=>	$password,
						);

					$this->db->where('id',$id);
					$query	=	$this->db->update('admin',$attr);

					if($this->db->affected_rows()){
						return true;
					}
					else{
						return FALSE;
					}
				}
			else{
				//echo'nice to filed';
				//exit();
				return false;
			}
	}

	public function edit_profile_user_data_update($id){
		$attr	=	array(
			'first_name'		=>	$this->input->post('firstname'),
			'last_name'			=>	$this->input->post('lastname'),
			'title'				=>	$this->input->post('title'),
			'about'				=>	$this->input->post('about'),
			'skils'				=>	$this->input->post('skills'),
			'facebook'			=>	$this->input->post('facebook'),
			'twiteer'			=>	$this->input->post('twitter'),
			'goggle'			=>	$this->input->post('google'),
			'skype'				=>	$this->input->post('skype'),
			
			);

		$this->db->where('id',$id);
		$query	=	$this->db->update('admin',$attr);

		if($this->db->affected_rows()){
			return true;
		}
		else{
			return false;
		}
	}

	public function user_profile_image_update($file_name = null){
		$id  =   $this->session->userdata('current_admin_id');

		$attr	=	array(
			'image'				=>	$file_name,
			);	
		$this->db->where('id',$id);
		$update = $this->db->update('admin',$attr);

		if($this->db->affected_rows()){
			return true;
		}
		else{
			return false;
		}
	}


////////////////////////////////////////////////////////////////////////////////

	public function this_user_activity_data_remove(){
		$id = $this->session->userdata('current_user_id');
		$fbid = $this->session->userdata('current_fb_user_id');
		$gogleid = $this->session->userdata('current_google_user_id');
		$twiterid = $this->session->userdata('current_twitter_user_id');
		
		


		if($id){
			$attr	= array(
				'name'	=>	$id,
				);
			$query	=	$this->db->delete('online_user_activity',$attr);
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}elseif($fbid){
			$attr	= array(
				'name'	=>	$fbid,
				);
			$query	=	$this->db->delete('online_user_activity',$attr);
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}elseif($gogleid){
			$attr	= array(
				'name'	=>	$gogleid,
				);
			$query	=	$this->db->delete('online_user_activity',$attr);
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}elseif($twiterid){
			$attr	= array(
				'name'	=>	$twiterid,
				);
			$query	=	$this->db->delete('online_user_activity',$attr);
			if($query){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}


	}




///////////////////
	public function payment_option_get(){
	    $this->db->select('*');
	    $this->db->from('payment_option');
		$this->db->order_by('id','asc');
		$this->db->where('status',1);
		$this->db->limit(1, 0);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;	
	}

	public function payment_option_get_mobil(){
	    $this->db->select('*');
	    $this->db->from('payment_option');
		$this->db->order_by('id','asc');
		$this->db->where('status',1);
		$this->db->where('id',2);
		//$this->db->limit(1, 1);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;	
	}

	public function payment_option_get_bank(){
	    $this->db->select('*');
	    $this->db->from('payment_option');
		$this->db->order_by('id','asc');
		$this->db->where('status',1);
		$this->db->where('id',3);
		//$this->db->limit(1, 1);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;		
	}


	public function payment_option_get_card(){
	    $this->db->select('*');
	    $this->db->from('payment_option');
		$this->db->order_by('id','asc');
		$this->db->where('status',1);
		$this->db->where('id',4);
		//$this->db->limit(1, 1);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;			
	}

	public function payment_type(){
	    $this->db->select('*');
	    $this->db->from('payment_option');
		$this->db->order_by('id','asc');
		$this->db->where('status',1);
		$this->db->limit(7, 0);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;		
	}
}