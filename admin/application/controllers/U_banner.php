<?php

class U_banner extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('M_banner');
		$this->load->helper(array('form', 'url'));
	
 	}

	public function index(){
		$data['table'] = $this->M_banner->getData();
		$this->load->viewku('banner_promo/v_banner',$data);
	}
 
	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 2000;
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			$this->index();
			//$this->load->viewku('banner_promo/v_banner', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$nama = $data['file_name'];
			
			$this->M_banner->databaseName($nama);
			//$this->load->viewku('banner_promo/v_banner', $data);
			$this->index();
		}
	}
 
}
