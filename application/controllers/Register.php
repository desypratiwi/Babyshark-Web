<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function daftar()
	{
		$data = $this->input->post();
		//print_r($data);
		$this->load->model('customer_model');
		$this->customer_model->daftar($data);
		redirect('akun');
	}
}
