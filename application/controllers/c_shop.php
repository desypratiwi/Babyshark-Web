<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_shop extends CI_Controller {
	public function __construct(){
			parent:: __construct();
            $this->load->model('m_sidebar');

	}
	
	public function index()
	{
		$dataS=$this->getSidebar();
		$this->load->viewshop("shop",$dataS);
	}
	
	public function getSidebar(){
            $temp['brand'] = $this->m_sidebar->getBrand();
            $temp['kategori'] = $this->m_sidebar->getKat();
            return $temp;
    }

    public function search(){
    	
    }
}
