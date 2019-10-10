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
		$user->foto = base_url("asset/customer/").$user->foto;
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
			
			$filename = trim($this->input->post('nama_toko'));
			print_r($this->input->post());
            $upload = $this->do_upload($filename);
            if($upload['sukses']){
                $url = $upload['upload_data']['file_name'];
                $value['foto'] = $url;
            }else{
                print_r($upload);
                //redirect(base_url());
                
            }
			
			$this->akun_model->updateAkun($value, $key);
			redirect('akun');
			
	}
	public function do_upload($name) {
        $config['upload_path'] = './asset/customer/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
        $config['max_size'] = 4096;
        $config['max_width'] = 4096;
        $config['max_height'] = 4096;
        $config['file_name'] = $name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
           $error = array('error' => $this->upload->display_errors(),'sukses'=>false);
           
            //$this->load->view('kurir/form_kurir', $error);
           return $error;
        } else {
            $data = array('upload_data' => $this->upload->data(),'sukses'=>true);
//            redirect(site_url('kurir'));
             return $data;
                
           // $this->load->view('success_page', $data);
             
        }
    }
}
