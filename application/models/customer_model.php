<?php
	class customer_model extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function getAll(){
			$c = $this->db->get('customer');
			return $c->result();
		}
		public function getCustomer($email){
			$custom = $this->db->get_where('customer', array('email' => $email))->result();
			return $custom;
		}
		public function daftar($data){
			$data['role']=3;
			$this->db->insert('tb_user',$data);
		}
	}
?>