<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_vendor extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('m_vendor');
			$this->load->helper('url');
			$this->load->helper('form');
			//$this->output->enable_profiler(TRUE);
		}
		
		public function index(){
			
		}
		
		public function update($pId = 1){
			$temp['data'] = $this->m_vendor->getVendor($pId);
			$this->load->viewku('vendor/v_updateVendor',$temp);
		}

		public function upVendor(){	
			$value = array(
        		
        		'username' => $this->input->post('nama_o'),
        		'nama_vendor' => $this->input->post('nama_v'),
				'nama_owner' => $this->input->post('nama_o'),
        		'telp_vendor' => $this->input->post('telp'),
        		'alamat_vendor' => $this->input->post('alamat'),
        		'kota_vendor' => $this->input->post('kota'),
        		'email_vendor' => $this->input->post('email')

        	);
        	$key = $this->input->post('id');
			$this->m_vendor->updateVendor($value,$key);
			redirect('c_vendor/update/1','refresh');
			//$this->load->view('vendor/profiler');
		}
	}
?>