<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends CI_Controller 
{
     function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
        $this->load->model('product');
     }
     
    function success(){ 
        // Get the transaction data
        $paypalInfo = $this->input->get();
        $data['logo']       = $this->Setting_model->logo_find();//logo find
        $data['Header']     = 'header';// web site header
        $data['Succ']     = 'success';
        $data['item_number'] = $paypalInfo['item_number']; 
        $data['txn_id'] = $paypalInfo["tx"];
        $data['payment_amt'] = $paypalInfo["amt"];
        $data['currency_code'] = $paypalInfo["cc"];
        $data['status'] = $paypalInfo["st"];
        
        // Pass the transaction data to view
        $this->load->view('welcome_message',$data);
    }
     
     function cancel(){
        // Load payment failed view
        $data['logo']       = $this->Setting_model->logo_find();//logo find
        $data['Header']     = 'header';// web site header
        $data['Succ']     = 'cancel';
        $this->load->view('welcome_message',$data);
     }
     
     function ipn(){


        // Check whether the payment is verified
       // if(preg_match("/VERIFIED/i")){
            // Insert the transaction data into the database
            $data['logo']       = $this->Setting_model->logo_find();//logo find
            $data['painsert']   = $this->PaypalM->paypal_insert();
            //$data['prdetails']   = $this->PaypalM->purches_details();
            $data['Header']     = 'header';// web site header
            $data['Succ']       = 'success';
            $this->load->view('welcome_message',$data);
       // }




    }



 








}