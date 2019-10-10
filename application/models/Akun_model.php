<?php
	class Akun_model extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function updateAkun($data,$key){
			$this->db->where('id_user', $key);
			$this->db->update('tb_user', $data);
		}
		
	}
	
