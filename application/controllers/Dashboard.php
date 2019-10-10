<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class dashboard extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}
		
		public function index(){
			//$this->load->model('customer_model');
			//$temp['c'] = $this->customer_model->getAll();
			$temp['content'] = $this->load->view('admin_view',array(),true);
			$this->load->view('contoh',$temp);
		}
		
		public function show($cus1=''){
			$temp['id'] = $cus1;
			
			$this->load->view('contoh',$temp);
		}
		
	}
?>