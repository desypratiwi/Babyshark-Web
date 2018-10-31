<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$d['content'] = $this->load->view('home_view',array(),true);
		
		$this->load->view('tampilan_view',$d);
	}
}
