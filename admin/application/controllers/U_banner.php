<?php

class U_banner extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('M_banner');
		$this->load->helper(array('form', 'url'));
	
 	}
	public function index(){
		$this->load->viewku('banner_promo/v_banner', array('error' => ' ' ));
	}
 
	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->aksi_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->viewku('banner_promo/v_banner', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->viewku('banner_promo/v_upload_sukses', $data);
		$data['tb_banner_promo'] = $this->M_banner->view();
		$this->load->view('banner_promo/v_banner', $data);
	}
 
	public function add(){
		$data = array();

		if($this->input->post('submit')){//ketika meekan tombol submit
			//lakukan upload file dengan memanggil function upload yang ada di model
			$upload = $this->M_banner->upload();

			if($upload['result'] == "success"){//jika proses upload berhasil maka akan disimpan ke database
				$this->M_banner->save($upload);
				redirect('banner_promo/v_banner');//kembali ke halaman awal/view data
			}
			else{//jika proses upload gagal
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('banner_promo/form', $data);
		}
	}