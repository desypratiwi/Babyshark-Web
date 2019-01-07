<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

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
        $this->load->viewku('kategori/list_kategori');
        $this->load->view('kategori/form_kategori');
    }

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Kategori_Md');
    }


    public function form($action) {
        if ($action == "tambah") {
            $data = $this->input->post();
            $data['aktif'] = "Yes";
            $filename = trim($data['nama_kategori']);
            $upload = $this->do_upload($filename);
            if ($upload['sukses']) {
                $url = "asset/kategori/" . $upload['upload_data']['file_name'];
                $data['gambar'] = $url;
            } else {
//                print_r($upload['error']);
            }
            $this->Kategori_Md->addKategori($data);
            redirect(site_url('kategori'));
        }
    }

    public function do_upload($name) {
        $config['upload_path'] = './asset/kategori/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 4096;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $config['file_name'] = $name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors(), 'sukses' => false);

            //$this->load->view('kurir/form_kurir', $error);
            return $error;
        } else {
            $data = array('upload_data' => $this->upload->data(), 'sukses' => true);
//            redirect(site_url('kurir'));
            return $data;

            // $this->load->view('success_page', $data);
        }
    }

    function all_kategori() {
        $kat = $this->Kategori_Md->allKategori();
        foreach ($kat as $row) {
            $aksi = "<div class='btn-group'><a href='#' data-toggle='dropdown' class='dropdown-toggle'><i class='fa fa-cog'></i></a>
                           <ul class='dropdown-menu pull-right text-left'>
                           <li><a href='#' class='clickable' onClick='formKategori({$row->id_kategori},\"show\")'>View</a></li>
                           <li><a href='#' class='clickable' onClick='formKategori({$row->id_kategori},\"edit\")'>Edit</a></li>
                           <li><a href='#' class='clickable' onClick='formKategori({$row->id_kategori},\"delete\")'>Delete</a></li>
                               </ul>
                        </div>";
            $row->aksi = $aksi;
            $res[] = $row;
        }
        $data['data'] = $res;
        print_r(json_encode($data));
    }
    function show(){
        $id = $this->input->post('id');
        $hasil = $this->Kategori_Md->getKategori($id);
        $data['kategori'] = $hasil;
        $this->load->view('kategori/form_kategori',$data);
    }
    function edit(){
        $id = $this->input->post('id');
        $hasil = $this->Kategori_Md->getKategori($id);
        $data['kategori'] = $hasil;
        $this->load->view('kategori/form_kategori',$data);
    }
    function delete(){
        $id = $this->input->post('id');
        $hasil = $this->Kategori_Md->deleteKategori($id);
    }

}
