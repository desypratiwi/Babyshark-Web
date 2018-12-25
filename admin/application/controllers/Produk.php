<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produk extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
		}
		
		public function index(){
			$this->load->model('customer_model');
			$temp['c'] = $this->customer_model->getAll();
			$this->load->viewku('produk/halaman_produk',$temp);
		}
		
		public function show($cus1=''){
			$temp['id'] = $cus1;
			
			$this->load->view('produk/halaman_produk',$temp);
		}
		
	}
?>