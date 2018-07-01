<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if($this->Login_model->is_admin_logged_in() ){
			redirect('admin/dashboard/');
		}else{
			redirect('social-admin/?logged-in-first');
		}
	}
	public function admin_dashboard(){
		if($this->Login_model->is_admin_logged_in() ){
			$data['homepage']		= 'home';
			$data['homeac']			= 'active';
			$data['logo']			=  $this->Setting_model->logo_find();
			$data['Todayorder']  	=  $this->HomePageModel->today_order_find();
			$data['SalesToday']  	=  $this->HomePageModel->today_sales_count();
			$data['TotalSales']  	=  $this->HomePageModel->total_sales_count();
			$data['TotalProducts']  =  $this->HomePageModel->total_products_count();
			$data['TotalAdmin']  	=  $this->HomePageModel->total_admin_count();
			$data['TotalActiveus']  =  $this->HomePageModel->total_active_user();
			$data['TotalEarnings']  =  $this->HomePageModel->total_earnings_count();
			$data['TodayEarnings']  =  $this->HomePageModel->today_earnings_count();
			$data['icon']			=  $this->Setting_model->store_icon();
			$data['store']			= $this->Setting_model->store_data_view();
			$this->load->view('dashboard_layout',$data);
		}
		else{
			redirect('social-admin/?logged-in-first');
		}
	}

}