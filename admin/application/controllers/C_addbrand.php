<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class C_addbrand extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('m_addbrand');
			$this->load->helper('url');
		}
		
		public function index(){
			$data['brand'] = $this->m_addbrand->allBrand();
			$this->load->viewku('produk/brand',$data);
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
		
		public function uploadBrand($id){
		$config['upload_path']          = './gambar/brand';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			 redirect('C_addbrand','refresh');
		}else{
			$data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$nama = $data['file_name'];
			
			$this->m_addbrand->databaseG($nama,$id);
			redirect('C_addbrand','refresh');
		}
	}	
	}
?>