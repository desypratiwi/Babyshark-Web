<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('customer_model');
		}
		
		public function index(){
			
			$temp['c'] = $this->customer_model->getAll();
			$this->load->view('login/tampilan_login',$temp);
		}
		
		public function show($cus1=''){
			$temp['id'] = $cus1;
			
			$this->load->view('login/tampilan_login',$temp);
		}
		public function cek_login(){
			$hasil = $this->input->post();
			//print_r($hasil);
			$cek = $this->customer_model->getCustomer($hasil['email']);
			if($hasil['password'] == $cek[0]->password){
				echo 'oke';
				redirect(site_url('home'));
			}
			else{
				echo 'salah';
				redirect(site_url('login'));
			}
		}
	}
?>