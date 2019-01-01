<?php
	class M_vendor extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function updateVendor($data){
			$this->db->replace('tb_mst_vendor',$data);
		}
		
		public function getVendor($data){
			$this->db->where('id_vendor', $data);
			$hasil = $this->db->get('tb_mst_vendor');
			return $hasil->result();
		}
	}
?>