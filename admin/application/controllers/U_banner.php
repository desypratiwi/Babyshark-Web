<?php

class U_banner extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('M_banner');
		$this->load->helper(array('form', 'url'));
	
 	}
	public function index(){
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