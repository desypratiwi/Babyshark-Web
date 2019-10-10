<?php
	class M_sidebar extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function getBrand(){
			$r = $this->db->get('tb_mst_brand')->result();
			return $r;

		}

		public function getKat(){
			$r = $this->db->get('tb_mst_kategori');
			return $r->result();
		}
	}
	
