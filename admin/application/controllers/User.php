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
                $data['user']= $users;
		$this->load->viewku('user/list_user',$data);
	}
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
                $this->load->model('User_Md');
	}
        public function all_user(){
            $data = $this->User_Md->allUsers();
            
            foreach ($data as $row) {
                $aksi = "<div class='btn-group'><a href='#' data-toggle='dropdown' class='dropdown-toggle'><i class='fa fa-cog'></i></a>
                           <ul class='dropdown-menu pull-right text-left'>
                           <li><a href='#' class='clickable' onClick='aksi({$row->id_user},\"show\")'>View</a></li>
                           <li><a href='#' class='clickable' onClick='aksi({$row->id_user},\"edit\")'>Edit</a></li>
                           <li><a href='#' class='clickable' onClick='aksi({$row->id_user},\"delete\")'>Delete</a></li>
                               </ul>
                        </div>";
                $row->aksi = $aksi;
                $res[] = $row;
            }
            $hasil['data'] = $res;
            print_r(json_encode($hasil));
        }
       
		
}
