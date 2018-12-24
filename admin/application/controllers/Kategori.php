<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->viewku('kategori/list_kategori');
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
                $this->load->model('Kategori_Md');
	}
        public function show(){
            $this->load->view('kategori/form_kategori');
        }
        public function form($action){
            if($action == "tambah"){
               $data = $this->input->post();
                $this->Kategori_Md->addKategori($data);    
                redirect(site_url());
            }

            
        }
        function all_kategori(){
            $kat = $this->Kategori_Md->allKategori();
            foreach($kat as $row){
                $aksi = "<div class='btn-group'><a href='#' data-toggle='dropdown' class='dropdown-toggle'><i class='fa fa-cog'></i></a>
                           <ul class='dropdown-menu pull-right text-left'>
                           <li><a href='#' class='clickable' onClick='aksi({$row->id_kategori},\"show\")'>View</a></li>
                           <li><a href='#' class='clickable' onClick='aksi({$row->id_kategori},\"edit\")'>Edit</a></li>
                           <li><a href='#' class='clickable' onClick='aksi({$row->id_kategori},\"delete\")'>Delete</a></li>
                               </ul>
                        </div>";
                $row->aksi = $aksi;
                $res[] = $row;
            }
            $data['data'] = $res;
            print_r(json_encode($data));
        }
		
}
