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
        $this->load->viewku('kurir/list_kurir',$data);
        $this->load->view('kurir/form_kurir');
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Kurir_Md');
    }

    public function list_kurir() {
     
    }


    public function form($action, $id = -1) {
        
        if ($action == "tambah") {
            $data = $this->input->post();
            $filename = trim($data['nama_perusahaan']);
            $upload = $this->do_upload($filename);
            if($upload['sukses']){
                $url = "asset/kurir/".$upload['upload_data']['file_name'];
                $data['logo_perusahaan'] = $url;
            }else{
                print_r($upload);
                //redirect(base_url());
                
            }
            
            $hasil = $this->Kurir_Md->addKurir($data);
            if ($hasil) {
//                echo "Tambah Sukses";
                redirect(site_url('kurir'));
            } else {
                echo "Tambah Gagal";
            }
        }else{
            $data = $this->input->post();
            $hasil = $this->Kurir_Md->editKurir($data,$data['id_kurir']);
            if($hasil){
                redirect(site_url('kurir'));
            }else{
                
            }
            
        }
    }

    public function do_upload($name) {
        $config['upload_path'] = './asset/kurir/';
        $config['allowed_types'] = 'jpeg|gif|jpg|png';
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
    function all_kurir(){
        $data = $this->Kurir_Md->allKurir();
        
         foreach ($data as $row) {
                $gambar = base_url($row->logo_perusahaan);
                $row->logo_perusahaan= "<img style='width:150px;height:150px;'src='{$gambar}'/>";
                $aksi = "<div class='btn-group'><a href='#' data-toggle='dropdown' class='dropdown-toggle'><i class='fa fa-cog'></i></a>
                           <ul class='dropdown-menu pull-right text-left'>
                           <li><a href='#' class='clickable' onClick='formKurir({$row->id_kurir},\"edit\")'>Edit</a></li>
                           <li><a href='#' class='clickable' onClick='formKurir({$row->id_kurir},\"delete\")'>Delete</a></li>
                               </ul>
                        </div>";
                $row->aksi = $aksi;
                $res[] = $row;
            }
        $data['data'] =$res;
        print_r(json_encode($data));
    }
    function show(){
        $id = $this->input->post('id');
        $hasil = $this->Kurir_Md->getKurir($id);
        $data['kurir'] = $hasil;
        $this->load->view('kurir/form_kurir',$data);
    }
    function edit(){
        $id = $this->input->post('id');
        $hasil = $this->Kurir_Md->getKurir($id);
        $data['kurir'] = $hasil;
        $data['aksi']="edit";
        $this->load->view('kurir/form_kurir',$data);
    }
    function delete($id){
        $id = $this->input->post('id');
        $hasil = $this->Kurir_Md->deleteKurir($id);
    }
}
