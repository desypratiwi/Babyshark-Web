<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Produk extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->model('Kategori_Md');
			$this->load->model('M_addbrand');
			$this->load->model('produk_model');
		}
		
		public function index(){
			
			$hasil = $this->produk_model->getAllProduct();
			$data['produks'] = $hasil;
			$this->load->viewku('produk/listProduk',$data);

		}
		
		public function show($id='',$action=''){
			$temp['id'] = $id;
			//echo $action;
			if($action ==''){
				$kategori = $this->Kategori_Md->allKategori();
				$brand =  $this->M_addbrand->allBrand();
				$data['brand'] = $brand;
				$data['kategori'] = $kategori;
				$this->load->viewku('produkform',$data);
			}
			else if($action == 'edit'){
				//echo "test";
				$hasil = $this->produk_model->getProductDetail($id);
				$data['produk'] = $hasil;
				$kategori = $this->Kategori_Md->allKategori();
				$brand =  $this->M_addbrand->allBrand();
				$data['brand'] = $brand;
				$data['kategori'] = $kategori;
				$this->load->viewku('produkform',$data);
			}else{
					
			}
			
			//print_r($brand);
		}
	function tambahProduct(){
		$namaproduk = $this->input->post('nama_produk');
		$deskripsi = $this->input->post('deskripsi_produk');
		$kategori = $this->input->post('kategori');
		$hargaawal = $this->input->post('harga_awal');
		$hargajual = $this->input->post('harga_jual');
		$stok = $this->input->post('stok');
		$diskon = $this->input->post('diskon');
		$produk_tersedia = $this->input->post('produk_tersedia');
		$catatan = $this->input->post('catatan');
		$brand = $this->input->post('brand');
		$upload = $this->do_upload($namaproduk);
		if ($upload['sukses']) {
                $url = "asset/produk/" . $upload['upload_data']['file_name'];
                $gambar = $url;
        } else {
                print_r($upload['error']);
        }
		$data = array(
			'nama_produk' => $namaproduk,
			'deskripsi_produk' => $deskripsi,
			'gambar' => $gambar,
			'id_kategori' => $kategori,
			'harga_awal' => $hargaawal,
			'harga_jual' => $hargajual,
			'stok' => $stok,
			'diskon' => $diskon,
			'catatan' => $catatan,
			'produk_tersedia' => $produk_tersedia,
			'id_brand' => $brand
			);
			//print_r($data);
		 $this->produk_model->insProduct($data);
		redirect(site_url("produk/show")); 
	}
	
	/*public function simpan()
{
	//upload dokumen
	
	$userfile = $this->uploadData('userfile');
	
}*/

public function do_upload($name) {
        $config['upload_path'] = './asset/produk/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        $config['max_size'] = 4096;
        $config['max_width'] = 1024;
        $config['max_height'] = 1024;
        $config['file_name'] = $name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors(), 'sukses' => false);
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data(), 'sukses' => true);
            return $data;
        }
    }
	
public function viewProduk (){
	
	//print_r($hasil);
}

	}
?>