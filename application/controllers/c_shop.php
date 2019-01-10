<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_shop extends CI_Controller {
	public function __construct(){
			parent:: __construct();
            $this->load->model('m_sidebar');
            $this->load->model('m_shop');
	}
	
	public function index()
	{
		$data['produk']=$this->m_shop->getAll();
		$this->vs($data);
	}
	
	public function vs($var){
		$dataS=$this->getSidebar();
		$this->load->viewshop("shop",$dataS,$var);
	}

	public function getSidebar(){
            $temp['brand'] = $this->m_sidebar->getBrand();
            $temp['kategori'] = $this->m_sidebar->getKat();
            return $temp;
    }

    public function searchk($k){
    		$data['produk']=$this->m_shop->getByKat($k);
    		$this->vs($data);
    }

    public function searchb($b){
    		$data['produk']=$this->m_shop->getByBrand($b);
    		$this->vs($data);
    }

}
