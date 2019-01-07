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
		$deskripsi = $this->input->post('deskripsiproduk');
		$kategori = $this->input->post('kategori');
		$hargaawal = $this->input->post('hargaawal');
		$hargajual = $this->input->post('hargajual');
		$stok = $this->input->post('stok');
		$diskon = $this->input->post('diskon');
		$produk_tersedia = $this->input->post('produk_tersedia');
		$catatan = $this->input->post('catatan');
		$brand = $this->input->post('brand');
		
		$data = array(
			'nama_produk' => $namaproduk,
			'deskripsi_produk' => $deskripsi,
			'id_kategori' => $kategori,
			'harga_awal' => $hargaawal,
			'harga_jual' => $hargajual,
			'stok' => $stok,
			'diskon' => $diskon,
			'catatan' => $catatan,
			'id_brand' => $brand
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