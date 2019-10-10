<?php

class C_konfirmasi extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('M_konfirmasi');
		$this->load->helper(array('form', 'url'));
	
 	}

	public function index(){
		$this->load->viewku('konfirmasi_pembayaran/v_konfirmasi', array('error' => ' ' ));
	}
 
	public function aksi_konfirm(){
		

 
		if ( ! $this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->viewku('banner_promo/v_banner', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$nama = $data['file_name'];
			
			$this->M_banner->databaseName($nama);
			$this->load->viewku('banner_promo/v_banner', $data);
			//$data['tb_banner_promo'] = $this->M_banner->view();
			//$this->load->view('banner_promo/v_banner', $data);
		}
	}
 
}
