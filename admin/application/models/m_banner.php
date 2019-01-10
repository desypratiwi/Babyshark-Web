<?php
	class M_banner extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		public function allBanner (){
			$query = $this->db->get('tb_banner_promo');
			return $query->result();
		}
		public function insertBanner($data){
			$this->db->insert('tb_banner_promo',$data);
		}
		
	}
?>