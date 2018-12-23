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
		$this->load->view('list_kategori');
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
        public function show(){
            $this->load->view('form_kategori');
        }
        public function form($action){
            if($action == "tambah"){
               $data = $this->input->post();
                $this->load->model('Kategori_Md');
                $this->Kategori_Md->addKategori($data);    
                redirect(site_url());
            }

            
        }
		
}
