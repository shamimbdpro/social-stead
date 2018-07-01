<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('login_page');
	}

	public function login_user_data_check(){
		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
		$username 		= 	$this->input->post('Username');
		$password 		=	md5($this->input->post('Password'));

		$attar = array(
			'user_name'				=>			$username,
			'password'				=>			$password,
			);
		$result  =  $this->db->get_where('admin',$attar);



		if($result->num_rows()  == 1){
			$attr	=	array(
				'current_admin_id'	=>	$result->row(0)->id,
				'current_admin_image'	=>	$result->row(18)->image,
				'current_admin_name'	=>	$username	
				);
			$this->session->set_userdata($attr);
			$attard = array(
				'name'		=>	$this->session->userdata('current_admin_id'),
				'user_name'	=>	$this->session->userdata('current_admin_name'),
				'agent' 	=>	$this->agent->browser(),
				'ip' 		=>	$this->input->ip_address(),
				'platform'	=>  $this->agent->platform(),
				'date'		=>	$dt->format('F j, Y'),
				'time'		=>	$dt->format('g:i a'),
				'activity' 	=>	1,
			);
			$this->db->insert('online_activity',$attard);

			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	//is user logged in
	public function is_admin_logged_in(){
		return $this->session->userdata('current_admin_id') != FALSE;
	}


	public function this_user_activity_data_remove(){
		$id = $this->session->userdata('current_admin_id');
		$attr	= array(
			'name'	=>	$id,
			);
		$query	=	$this->db->delete('online_activity',$attr);
		if($query){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}







	public function serialize_data_find(){
	    $this->db->select('*');
	    $this->db->from('online_activity');
		$this->db->order_by('id','DESC');
		//$this->db->limit(10);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}

	public function coustomer_activity_data_find(){
	    $this->db->select('*');
	    $this->db->from('online_user_activity');
		$this->db->order_by('id','DESC');
		//$this->db->limit(10);
	    $query_result=$this->db->get();
	    $result=$query_result->result();
	    return $result;
	}


}
