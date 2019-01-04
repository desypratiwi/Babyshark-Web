<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	public function __construct(){
			parent:: __construct();
			$this->load->model('customer_model');
			$this->load->model('akun_model');
		}
	public function index()
	{
		
		$user = $this->customer_model->getUser($_SESSION['username']);
		$d['user'] = $user;
		$d['content'] = $this->load->view('customer/akun_view',$d,true);
		
		$this->load->view('tampilan_view',$d);
	}
	public function simpan($username){
		$data = $this->input->post();
		$user['email'] = $data['email'];
		$user['no_telp'] = $data['no_telp'];
		//print_r($data);
		$this->customer_model->updateCustomer($user,$username);
		redirect(site_url('akun'));
	}
	public function update(){
		$tgl= $this->input->post('tgl_lahir');
		$m= substr($tgl,0,2);
		$d= substr($tgl,3,2);
		$y= substr($tgl,6,4);
		
		$tglformat= $y."-".$m."-".$d;
		
		$value = array(
        		'email' => $this->input->post('email'),
        		'no_telp' => $this->input->post('no_telp'),
        		'nama_toko' => $this->input->post('nama_toko'),
				'jk' => $this->input->post('jk'),
        		'tgl_lahir' => $tglformat
        	);
			$key =$this->input->post('id');
			$this->akun_model->updateAkun($value, $key);
			redirect('akun');
			
	}
}
