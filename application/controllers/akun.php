<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function index()
	{
		$d['content'] = $this->load->view('customer/akun_view',array(),true);
		
		$this->load->view('tampilan_view',$d);
	}
}
