<?php

class uploadproduk extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                
				$this->load->helper(array('form', 'url'));
			$this->load->model('customer_model');
		}

        public function index()
        {
				
				$data['user'] = $this->customer_model->insProduct()->result();
                $this->load->view('produkform', array('error' => ' ' ));
        }
		function tambah(){
		$this->load->view('produkform');
	}
	
	function tambahProduct(){
		$namaproduk = $this->input->post('namaproduk');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		
		$data = array(
			'nama' => $namaproduk,
			'kategori' => $kategori,
			'harga' => $harga
			);
		$this->customer_model->insProduct($data);
		$this->load->view('produkform');
	}

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('produkform', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('dosen/upload_success', $data);
                }
        }
}
?>