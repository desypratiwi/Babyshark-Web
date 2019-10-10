<?php
	class Customer_model extends CI_model{
		public function __construct(){
			parent:: __construct();       
			$this->load->database();
		}
		                                                                
		
		
		public function getAll(){
			$c = $this->db->get('tb_mst_customer');
			return $c->result();
		}
		public function getCustomer($email){
			$custom = $this->db->get_where('tb_mst_customer', array('email' => $email))->result();
			return $custom;
		}
	}
?>
