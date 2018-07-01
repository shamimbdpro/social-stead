<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePageModel extends CI_Model {

	public function index()
	{
		$this->load->view('login_page');
	}

	public function today_order_find(){
      	$date = date("d/m/Y");
		$this->db->from('payments');
		$this->db->where('date',$date);
		$this->db->order_by("payment_id", "DESC");
		$query = $this->db->get(); 
		return $query->result();



		//$this->db->select('SUM(qty) as todaysales');
		//$this->db->where('date',$date);
		//$q=$this->db->get('sales_information');
		//$row=$q->row();
		//$todaysales=$row->todaysales;
		//return $todaysales;
	}

	public function total_sales_count(){
       /*$query = $this->db->query("SELECT  *
			FROM   sales_information WHERE date ");
       return $query;
       */
		$this->db->select('SUM(qty) as totalsales');
		$q=$this->db->get('payments');
		$row=$q->row();
		$totalsales=$row->totalsales;
		return $totalsales;
	}
	public function today_sales_count(){
		/*$date = date("d/m/Y");
       $query = $this->db->query("SELECT  *
			FROM   sales_information WHERE date <= '$date' ");
       return $query;
       */
       $date = date("d/m/Y");

		$this->db->select('SUM(qty) as todaysales');
		$this->db->where('date',$date);
		$q=$this->db->get('payments');
		$row=$q->row();
		$todaysales=$row->todaysales;
		return $todaysales;
	}
	public function total_products_count(){
       $query = $this->db->query("SELECT  *
			FROM   payments WHERE product_id ");
       return $query;
	}



	public function total_admin_count(){
       $query = $this->db->query("SELECT  *
			FROM   admin WHERE id ");
       return $query;
	}

	public function total_active_user(){
       $query = $this->db->query("SELECT  *
			FROM   online_activity WHERE id ");
       return $query;
	}


	public function total_earnings_count(){

		$this->db->select('SUM(payment_gross) as score');
		$q=$this->db->get('payments');
		$row=$q->row();
		$score=$row->score;
		return $score;
	}

	public function today_earnings_count(){
       $date = date("d/m/Y");

		$this->db->select('SUM(payment_gross) as todayearnings');
		$this->db->where('date',$date);
		$q=$this->db->get('payments');
		$row=$q->row();
		$todayearnings=$row->todayearnings;
		return $todayearnings;
	}

	public function home_featured_product() {
		$st = 1;
	    $this->db->select("*");
	    $this->db->from("home_page_offer");
	    //$this->db->limit(1, 2);
	    $this->db->where('home_status',1);
		$this->db->order_by('home_id','DESC');
		$this->db->limit(6);
	    $q=$this->db->get();

	    $final = array();
	    if ($q->num_rows() > 0) {
	        foreach ($q->result() as $row) {
	            $this->db->select("*");
	            $this->db->from("products");
	            $this->db->where("home_featured", $row->home_id);
	            $this->db->order_by('product_id','DESC');
	            $this->db->limit(50);
	            $q = $this->db->get();

	            if ($q->num_rows() > 0) {
	                $row->children = $q->result();
	            }
	            array_push($final, $row);
	        }
	    }
	    return $final;
	}
	///////////top selling
	public function top_selling(){
	  /* $this->db->select('productt_id , product_id, count(productt_id) as count_visit ');
	    $this->db->from('sales_details');
	    $this->db->join('products ','products.product_id = sales_details.productt_id');
	   //// $this->db->where('ov.page_type','hotel');
	   // $this->db->where('ov.is_bot',0);
	    $this->db->group_by('productt_id');
	    $this->db->order_by('productt_id',"asc");
	   $query = $this->db->get();
	   return $query;*/

       /*$query = $this
                ->db
                ->select('*')
                ->from('products')
                ->join('products_tags', 'products_tags.pro_id = products.product_id')
                ->join('tags', 'tags.tags_id = products_tags.tagsss_id','left')
                ->like('tags_name',$st)
                ->or_like('tags_name',$st)
                ->get();
                */
	$query = $this->db
	              ->select('discount_price,product_sub_subcategory_name,products.prodcut_image_link,products.product_id,sales_details.product_id,quantity,prodcut_price,products.product_name, count(sales_details.product_id) AS quantity')
	            ->from('products')
                //->join('products_tags', 'products_tags.pro_id = products.product_id')
                ->join('sales_details ','sales_details.product_id = products.product_id')
  // ->from('sales_details as ov')
	    //->join ( 'products', ' products.product_id =ov.productt_id' , 'left' )
	    //->join ( 'Soundtrack', 'Soundtrack.album_id = Album.album_id' , 'left' )
	              ->group_by('sales_details.product_id')
	              ->order_by('quantity', 'desc')
	              ->limit('10')
	              ->get();
	return $query->result();


	/*	$query = $this->db
	              ->select('productt_id, count(productt_id) AS quantity')
  // ->from('sales_details as ov')
	    //->join ( 'products', ' products.product_id =ov.productt_id' , 'left' )
	    //->join ( 'Soundtrack', 'Soundtrack.album_id = Album.album_id' , 'left' )
	              ->group_by('productt_id')
	              ->order_by('quantity', 'desc')
	              ->get('sales_details', 100);
	return $query->result();*/
	}


	public function fifty_percentage_offer($id = null){

	    $this->db->where('product_subcategory_name',$id);
	    $this->db->where('status',1);
	    $this->db->order_by('product_id', 'DESC');
	    $this->db->limit(10);
	    $records=$this->db->get('products')->result();
	    return $records;
	
	}

	public function fifty_percentage_offer_cat($id = null){
	    $this->db->where('product_category_name',$id);
	    $this->db->where('status',1);
	    $this->db->order_by('product_id', 'DESC');
	    $this->db->limit(10);
	    $records=$this->db->get('products')->result();
	    return $records;
	}
	public function fifty_percentage_offer_child($id = null){
	    $this->db->where('product_sub_subcategory_name',$id);
	    $this->db->where('status',1);
	    $this->db->order_by('product_id', 'DESC');
	    $this->db->limit(10);
	    $records=$this->db->get('products')->result();
	    return $records;
	}


}