<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Customer extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}
		
		public function index(){
			$this->load->model('Customer_model');
			$temp['c'] = $this->Customer_model->getAll();
			$this->load->viewku('customer/tabel_customer',$temp);
		}
		
		public function show($cus1=''){
			$temp['id'] = $cus1;
			
			$this->load->view('customer/tabel_customer',$temp);
		}
	}
?>