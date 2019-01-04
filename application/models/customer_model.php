<?php
	class customer_model extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		public function updateCustomer($user,$username){
			$this->db->where('username',$username);
			$this->db->update('tb_user',$user);
		}
		public function getAll(){
			$c = $this->db->get('customer');
			return $c->result();
		}
		public function getCustomer($email){
			$custom = $this->db->get_where('customer', array('email' => $email))->result();
			return $custom;
		}
		public function getUser($username){
			$custom = $this->db->get_where('tb_user', array('username' => $username))->row();
			return $custom;
		}

		public function daftar($data){
			$data['role']=3;
			$this->db->insert('tb_user',$data);
		}

		 function checkLogin($username, $password){
			$sql = "Select * from tb_user where username = '".$username."' and `password` = '".$password."'";
			$hasil = $this->db->query($sql);
			
			if($hasil->num_rows()>=1){
				return true;
				
			}else {
				return false;
			}
			
		}
		function cekRole($username){
			$sql = "SELECT * FROM `tb_user` where username = '".$username."'";
			$hasil = $this->db->query($sql)->row_array();
			return $hasil;
				

		}
	}
