<?php
	class M_addbrand extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function insertBrand($data){
			$this->db->insert('tb_mst_brand',$data);
		}
		
	}
?>