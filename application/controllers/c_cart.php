<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cart extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_cart');
	}

	public function index(){
		$this->load->viewcart('v_cart');
	}

	public function addToCart($idBarang){
		$dataProd = $this->m_cart->getHarga($idBarang);
		$harga = $dataProd->harga_jual;

		$this->m_cart->addToCart($harga,$idBarang);
		redirect('home','refresh');
	}
	
	
}