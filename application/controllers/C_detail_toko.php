<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_detail_toko extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('session');
	}
	
	public function show($id = '1'){
		$this->load->model('m_detail_toko');
	 	$data['d'] = $this->m_detail_toko->getDetail($id);
		$this->load->view('detail_toko',$data);
	}
		}