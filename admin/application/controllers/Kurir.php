<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kurir extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        //$this->load->view('list_kategori');
        $kurir = $this->Kurir_Md->allKurir();
        $data['kurir'] = $kurir;
        $this->load->view('kurir/list_kurir',$data);
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Kurir_Md');
    }

    public function list_kurir() {
     
    }

    public function show() {
        $this->load->view('kurir/form_kurir');
//            $this->load->view('success_page');
    }

    public function form($action, $id = -1) {
        
        if ($action == "tambah") {
            $data = $this->input->post();
            $filename = trim($data['nama_perusahaan']);
            $upload = $this->do_upload($filename);
            if($upload['sukses']){
                $url = "admin/asset/kurir/".$upload['upload_data']['file_name'];
                $data['logo_perusahaan'] = $url;
            }else{
                
            }
            $hasil = $this->Kurir_Md->addKurir($data);
            if ($hasil) {
//                echo "Tambah Sukses";
                redirect(site_url('kurir'));
            } else {
                echo "Tambah Gagal";
            }
        }
    }

    public function do_upload($name) {
        $config['upload_path'] = './asset/kurir/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 4096;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = $name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo_perusahaan')) {
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
