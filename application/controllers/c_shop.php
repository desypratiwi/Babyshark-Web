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
		$data['title']="Featured Items";
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
    		$data['title']=$k;
    		$this->vs($data);
    }

    public function searchb($b){
    		$data['produk']=$this->m_shop->getByBrand($b);
    		$data['title']=$b;
    		$this->vs($data);
    }

    public function search(){
    		$s = $this->input->post('search');
    		$data['produk']=$this->m_shop->getBySearch($s);
    		$data['title']=$s;
    		$this->vs($data);
    }

}
