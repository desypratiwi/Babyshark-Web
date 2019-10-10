<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cart extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_cart');
		$this->output->enable_profiler(TRUE);		
	}

	public function index(){
		$data['cart'] = $this->m_cart->getAll();
		$data['kurir'] = $this->m_cart->getKurir();
		$this->load->viewcart('v_cart',$data);
	}

	public function addToCart($idBarang){
		$dataProd = $this->m_cart->getHarga($idBarang);
		$harga = $dataProd->harga_jual;

		$this->m_cart->addToCart($harga,$idBarang);
		redirect('home','refresh');
	}

	public function add($b){
		$data = $this->m_cart->getQS($b);
		$jum = $data->jumlah + 1;
		$har= $jum * $data->harga;

		$this->m_cart->quantity($jum,$har,$b);
		redirect('c_cart','refresh');
	}

	public function sub($b){
		$data = $this->m_cart->getQS($b);
		$jum = $data->jumlah - 1;
		$har= $jum * $data->harga;

		$this->m_cart->quantity($jum,$har,$b);
		redirect('c_cart','refresh');
	}

	public function del($b){
		$this->m_cart->del($b);
		redirect('c_cart','refresh');
	}


	
	
}