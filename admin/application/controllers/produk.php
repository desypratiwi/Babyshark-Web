<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class produk extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
		}
		
		public function index(){
			
			$this->load->view('produkform');
		}
		
		public function show($cus1=''){
			$temp['id'] = $cus1;
			
			$this->load->view('produkform');
		}
		
	}
?>