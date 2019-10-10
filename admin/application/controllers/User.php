<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
                $users= $this->User_Md->allUsers();
                $data['users']= $users;
                $role = $this->User_Md->getRoles();
//                print_r($role);
                $data['role'] = $role;
		$data['all'] = $this->load->viewku('user/list_user',$data);
                $this->load->view('user/form_user',$data);
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
                $this->load->model('User_Md');
	}
         public function form($action) {
        if ($action == "tambah") {
            $data = $this->input->post();
            
            $this->User_Md->insertUser($data);
            redirect(site_url('user'));
        }else{
            $data = $this->input->post();
//            print_r($data);
            $hasil = $this->User_Md->updateUser($data,$data['id_user']);
            if($hasil){
                redirect(site_url('user'));
            }else{
                
            }
        }
    }
        public function list_user(){
                $users= $this->User_Md->allUsers();
                $data['users']= $users;
		$data['all'] = $this->load->view('user/list_user',$data);
                $this->load->view('user/form_user',$data);
                //$this->load->view('user/form_user');
        }
        public function all_user(){
            $data = $this->User_Md->allUsers();
            $res = array();
            foreach ($data as $row) {
                $aksi = "<div class='btn-group'><a href='#' data-toggle='dropdown' class='dropdown-toggle'><i class='fa fa-cog'></i></a>
                           <ul class='dropdown-menu pull-right text-left'>
                           <li><a href='#' class='clickable' onClick='formUser(\"{$row->username}\",\"edit\")'>Edit</a></li>
                           <li><a href='#' class='clickable' onClick='formUser(\"{$row->username}\",\"delete\")'>Delete</a></li>
                               </ul>
                        </div>";
                $row->aksi = $aksi;
                $res[] = $row;
            }
            $hasil['data'] = $res;
            print_r(json_encode($hasil));
        }
        public function show(){
            //print_r($this->input->post());
            $data = $this->input->post();
            $id = $data['id'];
            $user = $this->User_Md->getDetailUser($id);
            $data['user']= $user;
            $this->load->view('user/form_user',$data);
        }
        public function edit(){
            $data = $this->input->post();
            $id = $data['id'];
            $user = $this->User_Md->getDetailUser($id);
            $role = $this->User_Md->getRoles();
            $data['role'] = $role;
            $data['user']= $user;
            $data['aksi'] = "edit";
//            print_r($data);
            $this->load->view('user/form_user',$data);
        }
        public function delete(){
            $data = $this->input->post();
            $id = $data['id'];
            $this->User_Md->deleteUser($id);
            //$this->list_user();
            //redirect(site_url('user'));
        }
       
		
}
