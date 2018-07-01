<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['Header']    = 'header';
		$data['Baner']     = 'braner';
		$data['Ourservice']     = 'service';
		$data['MainContent']     = 'maincontent';
		$data['Fotter']     = 'fotter';
		$data['logo']		= $this->Setting_model->logo_find();
		$data['AllSer']     = $this->ServiceModel->all_service_find();
		$this->load->view('welcome_message',$data);
	}
}
