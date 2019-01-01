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
        		'id_brand' => $this->input->post('id'),
        		'nama_brand' => $this->input->post('name'),
        		'deskripsi_brand' => $this->input->post('desc')
        	);
			$this->m_addbrand->insertBrand($value);
			$this->load->view('v_addbrand');
		}
		
	}
?>