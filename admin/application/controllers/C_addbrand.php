<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_addbrand extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('m_addbrand');
			$this->load->helper('url');
		}
		
		public function index(){
			
			$this->load->viewku('produk/v_addbrand');
		}
		
		public function addBrand(){	
			$value = array(
        		'BrandID' => $this->input->post('id'),
        		'BrandName' => $this->input->post('name'),
        		'BrandDesc' => $this->input->post('desc')
        	);
			$this->m_addbrand->insertBrand($value);
			$this->load->view('v_addbrand');
		}
		
	}
?>