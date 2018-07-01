<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaypalM extends CI_Model {
	public function index(){

	}
	public function paypal_insert(){

		$data    = $this->session->userdata('name');
		$data2   = $this->session->userdata('email');
		$data3   = $this->session->userdata('url'); 
		$data4   = $this->session->userdata('qty');
		$data5   = $this->session->userdata('price');
		$data6   = $this->session->userdata('amount'); 
		//$data8   = $this->input->post('item_id');

		$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
		$attr = array(
			//'txn_id'		    => $data,
			'payment_gross'		=> $data6,
			'date'		=>	$dt->format('F j, Y'),
			'time'		=>	$dt->format('g:i a'),
			);
		$this->db->insert('payments',$attr);


		$inid = $this->db->insert_id();


		foreach ($this->cart->contents() as $items){
			$order_detail = array(
				//'orderid' 		=> $ord_id,
				
				'pr_id'   => $items['id'] ,
				'qty' 	  => $items['qty'],
			    'price'   => $items['price'],
      			'url'    => $items['url'],
      			'buyer_email'    => $items['email'],
      			'txn_id'  => $inid,

			);		
		   $insertthree = $this->db->insert('order',$order_detail);
		}
		$this->cart->destroy();
		return TRUE;





	}







/*	public function purches_details(){
	    $this->db->select ( '*' ); 
	    $this->db->from ( 'sales_details' );
	    $this->db->join ( 'sales_information', 'sales_information.id = sales_details.sales_id' , 'left' );
	    $this->db->where ( 'sales_details.user_id', $googleid);
	    $this->db->order_by("sales_information.id", "DESC");
	    $query = $this->db->get ();
	    return $query->result ();
	}*/



}