<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoadData extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		if($this->Login_model->is_admin_logged_in() ){
			$loadType=$_POST['loadType'];
			$loadId=$_POST['loadId'];

			$result=$this->ServiceModel->getData($loadType,$loadId);
			$HTML="";
			
			if($result->num_rows() > 0){
				foreach($result->result() as $list){
					$HTML.="<option value='".$list->id."'>".$list->name."</option>";
				}
			}
			echo $HTML;
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}

}