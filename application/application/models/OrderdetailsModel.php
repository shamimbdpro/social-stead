<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderdetailsModel extends CI_Model {

	public function index()
	{
		$this->load->view('login_page');
	}

	public function all_user_order_detials(){
	    $this->db->select('*');
	    $this->db->from('payments');
	    //$this->db->where('status',1);
		$this->db->order_by('payment_id','DESC');
		//$this->db->limit(10);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}

	public function this_user_order_detials($user_id = null){
		$attr	= array(
			'user_id'	=>	$user_id
			);
		$query	=	$this->db->get_where('payments',$attr);
		if($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return FALSE;
		}

		/*$this->db->select('*');    
		$this->db->from('users');
		$this->db->join('payments', 'users.user_id = payments.user_id');
		$this->db->join('sales_details', 'payments.id = sales_details.sales_id');
		$query = $this->db->get();
		$results = $query->result();
		//var_dump($results);
		//exit();
		return $results;*/
	}

	public function this_or_informaion($orderid = null){
		$attr	= array(
			'payment_id'	=>	$orderid
			);
		$query	=	$this->db->get_where('payments',$attr);
		if($query->num_rows() == 1){
			return $query->result();
		}
		else{
			return FALSE;
		}
	}

	public function this_user_order_product_details($orderid = null){

	    $this->db->select ( '*' ); 
	    $this->db->from ( 'payments' );
	    $this->db->join ( 'order', 'order.txn_id = payments.payment_id' , 'left' );
	    $this->db->join ( 'service_pack', 'service_pack.s_id = order.pr_id' , 'left' );
	    $this->db->where ( 'payments.payment_id', $orderid);
	    $this->db->order_by("payments.payment_id", "DESC");
	    $query = $this->db->get ();
	    return $query->result ();











	}


	/////////////////////////user dashboard////////////////////////////////////////////////

	public function this_current_user_order_info(){
		$id = $this->session->userdata('current_user_id');
		$fbid = $this->session->userdata('current_fb_user_id');
		$googleid = $this->session->userdata('current_google_user_id');
		$twitterid = $this->session->userdata('current_twitter_user_id');



		if($id){
			$attr	= array(
				'user_id'	=>	$id
				);

			$query	=	$this->db->get_where('payments',$attr);
			return $query->result();
		}elseif($fbid){
			$attr	= array(
				'user_id'	=>	$fbid
				);

			$query	=	$this->db->get_where('payments',$attr);
			return $query->result();
		}elseif($googleid){
			$attr	= array(
				'user_id'	=>	$googleid
				);

			$query	=	$this->db->get_where('payments',$attr);
			return $query->result();
		}elseif($twitterid){
						$attr	= array(
				'user_id'	=>	$twitterid
				);

			$query	=	$this->db->get_where('payments',$attr);
			return $query->result();
		}
	}




	public function this_current_user_order_detials(){
		$id = $this->session->userdata('current_user_id');
		$fbid = $this->session->userdata('current_fb_user_id');
		$googleid = $this->session->userdata('current_google_user_id');
		$twitterid = $this->session->userdata('current_twitter_user_id');

		if($id){
		    $this->db->select ( '*' ); 
		    $this->db->from ( 'sales_details' );
		    $this->db->join ( 'payments', 'payments.id = sales_details.sales_id' , 'left' );
		    $this->db->where ( 'sales_details.user_id', $id);
		    $this->db->order_by("payments.id", "DESC");
		    $query = $this->db->get ();
		    return $query->result ();
		}elseif($fbid){
		    $this->db->select ( '*' ); 
		    $this->db->from ( 'sales_details' );
		    $this->db->join ( 'payments', 'payments.id = sales_details.sales_id' , 'left' );
		    $this->db->where ( 'sales_details.user_id', $fbid);
		    $this->db->order_by("payments.id", "DESC");
		    $query = $this->db->get ();
		    return $query->result ();
		}elseif($googleid){
		    $this->db->select ( '*' ); 
		    $this->db->from ( 'sales_details' );
		    $this->db->join ( 'payments', 'payments.id = sales_details.sales_id' , 'left' );
		    $this->db->where ( 'sales_details.user_id', $googleid);
		    $this->db->order_by("payments.id", "DESC");
		    $query = $this->db->get ();
		    return $query->result ();
		}else{
		    $this->db->select ( '*' ); 
		    $this->db->from ( 'sales_details' );
		    $this->db->join ( 'payments', 'payments.id = sales_details.sales_id' , 'left' );
		    $this->db->where ( 'sales_details.user_id', $twitterid);
		    $this->db->order_by("payments.id", "DESC");
		    $query = $this->db->get ();
		    return $query->result ();
		}

/*	    $this->db->select ( '*' ); 
	    $this->db->from ( 'sales_details' );
	    $this->db->join ( 'payments', 'payments.id = sales_details.sales_id' , 'left' );
	    $this->db->where ( 'sales_details.user_id', $user_id);
	    $this->db->order_by("payments.id", "DESC");
	    $query = $this->db->get ();
	    return $query->result ();*/


		
		/*$attr	= array(
			'user_id'	=>	$user_id
			);
		$this->db->order_by("id", "DESC");
		$this->db->limit(1);
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();	*/
	}
public function this_user_order_ranid(){
	$id = $this->session->userdata('current_user_id');
	$fbid = $this->session->userdata('current_fb_user_id');
	$googleid = $this->session->userdata('current_google_user_id');
	$twitterid = $this->session->userdata('current_twitter_user_id');
	if($id){
		$attr	= array(
			'user_id'	=>	$id
			);
		$this->db->order_by("id", "DESC");
		$this->db->limit(1);
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();	
	}elseif($fbid){
		$attr	= array(
			'user_id'	=>	$fbid
			);
		$this->db->order_by("id", "DESC");
		$this->db->limit(1);
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();
	}elseif($googleid){
		$attr	= array(
			'user_id'	=>	$googleid
			);
		$this->db->order_by("id", "DESC");
		$this->db->limit(1);
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();
	}elseif($twitterid){
		$attr	= array(
			'user_id'	=>	$twitterid
			);
		$this->db->order_by("id", "DESC");
		$this->db->limit(1);
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();
	}else{
		return FALSE;
	}

}
	public function this_current_user_all_order_detials(){
		$user_id = $this->session->userdata('current_user_id');
		$attr	= array(
			'user_id'	=>	$user_id
			);
		$this->db->order_by("id", "DESC");
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();
	}

	public function this_user_prodcut_information($id = null){
		$user_id = $this->session->userdata('current_user_id');

		$attr	= array(
			'user_id'	=>	$user_id,
			'sales_id'	=>	$id
			);

		$query	=	$this->db->get_where('sales_details',$attr);
		return $query->result();	

	}

	public function this_current_order_detials($id = null){
		$user_id = $this->session->userdata('current_user_id');
		$attr	= array(
			'user_id'	=>	$user_id,
			'id'	=>	$id
			);
		$query	=	$this->db->get_where('payments',$attr);
		return $query->result();	

	}



}