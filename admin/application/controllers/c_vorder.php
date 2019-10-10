<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_vorder extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('m_vorder');
			$this->load->helper('url');
			$this->load->helper('form');
			//$this->output->enable_profiler(TRUE);
		}
		
		public function index(){
			$data['order'] = $this->m_vorder->allVorder();
			$this->load->viewku('vendor/order',$data);
		}
		
		public function confirm($id){
			$this->m_vorder->confirm($id);
			redirect('c_vorder');
		}

		public function kirim1($id){
			$resi = $this->input->post('resi1');
			$this->m_vorder->kirim($id,$resi);
			redirect('c_vorder');
		}

		public function update($pId){
			$temp['data'] = $this->m_vendor->getVendor($pId);
			$this->load->viewku('vendor/v_updateVendor',$temp);
		}

		public function upVendor(){	
			$value = array(
        		
        		'username' => $this->input->post('nama_o'),
        		'nama_vendor' => $this->input->post('nama_v'),
				'nama_owner' => $this->input->post('alamat'),
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