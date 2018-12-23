<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('customer_model');
		}
		
		public function index(){
			
			//$temp['c'] = $this->customer_model->getAll();
			$this->load->view('login/tampilan_login');
		}
		
		public function show($cus1=''){
			$temp['id'] = $cus1;
			
			$this->load->view('login/tampilan_login',$temp);
		}
		public function cek_login(){
			$hasil = $this->input->post();
			
			$cek = $this->customer_model->checkLogin($hasil['email'],$hasil['password']);
			if ($cek == true){
			 $hasilcekRole = $this->customer_model->cekRole($hasil['email']);
			//print_r($hasilcekRole);
				$this->session->set_userdata('isLogin','udahLogin');
				if($hasilcekRole['role'] == 3){
					redirect (site_url('home'));
					//echo "masuk ke home";
				}else{
					redirect (site_url('dashboard'));
					//echo "dashboard";
				}
				
			}else{ 
			$this->session->set_flashdata('gagal_login','gagal');
				redirect (site_url('login'));
			}
			
		}
		public function logout(){
			//echo 'ini halaman logout';
			$this->session->sess_destroy();
			redirect (site_url('login'));
		}
		
	}
?>