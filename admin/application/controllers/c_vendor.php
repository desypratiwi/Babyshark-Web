<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_vendor extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('m_vendor');
			$this->load->helper('url');
		}
		
		public function index(){
			$id = $this->input->get('1');
			$temp['data'] = $this->m_vendor->getVendor($id);
			$this->load->view('vendor/v_updateVendor',$temp);
		}
		
		public function upVendor(){	
			$value = array(
        		'id_vendor' => $this->input->post('id'),
        		'username' => $this->input->post('nama_o'),
        		'nama_vendor' => $this->input->post('nama_v'),
				'nama_owner' => $this->input->post('alamat'),
        		'telp_vendor' => $this->input->post('telp'),
        		'alamat_vendor' => $this->input->post('alamat'),
        		'kota_vendor' => $this->input->post('kota'),
        		'email_vendor' => $this->input->post('email')

        	);
			$this->m_addbrand->updateVendor($value);
			$this->load->view('vendor/v_updateVendor');
		}
		
	}
?>