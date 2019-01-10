<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class c_banner extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('m_banner');
			$this->load->helper('url');
			$this->load->helper('form');
		}
		
		public function index(){
			
			$this->load->viewku('banner_promo/u_banner');
		}
		
		public function addBanner(){	
			$value = array(
        		'id_banner' => $this->input->post('id'),
        		'f_banner' => $this->input->post('file'),
        		'l_banner' => $this->input->post('link')
        	);
			$this->m_banner->insertBanner($value);
			$this->load->viewku('u_banner');
		}
		
	}
?>