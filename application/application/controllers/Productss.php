<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Productss extends CI_Controller
{
    function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        
        // Get products data from database
        $data['products'] = $this->product->getRows();
        
        // Pass products data to view
        $this->load->view('products/index', $data);
    }
    
    function buy($id){
        // Set variables for paypal form
        $returnURL = base_url().'paypal/success'; //payment success url
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url
        $notifyURL = base_url().'paypal/ipn'; //ipn url
        
        // Get product data
        $product = $this->product->getRows($id);
        
        // Get current user ID from session
        //$userID = $_SESSION['userID'];
        
        // Add fields to paypal form
        $this->paypal_lib->add_field('return', $returnURL);
        $this->paypal_lib->add_field('cancel_return', $cancelURL);
        $this->paypal_lib->add_field('notify_url', $notifyURL);
        $this->paypal_lib->add_field('item_name', $product['pack_name']);
       // $this->paypal_lib->add_field('custom', $userID);
        $this->paypal_lib->add_field('item_number',  $product['s_id']);
        $this->paypal_lib->add_field('amount',  $product['pack_price']);
        
        // Load paypal form
        $this->paypal_lib->paypal_auto_form();
    }
}