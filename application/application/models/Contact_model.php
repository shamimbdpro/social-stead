<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {
	public function index(){

	}
	public function customer_message_insert(){
		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
		$attr = array(
			'name'  =>  $this->input->post('name'),
			'email'    =>  $this->input->post('email'),
			'subject'    =>  $this->input->post('subject'),
			'message'    =>  $this->input->post('message'),
			'date'		=>	$dt->format('F j, Y'),
			'time'		=>	$dt->format('g:i a'),
			);
		$insert = $this->db->insert('message',$attr);

		if($insert){
			return true;
		}
		else{
			return false;
		}
	}



}