<?php
	class M_produk extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		public function getAllProduk(){
			$produks = $this->db->get("tb_mst_produk")->result();
			return $produks;
		}
		public function getDetail($id){
			$custom = $this->db->get_where('tb_mst_produk', array('id_produk' => $id))->row();
			return $custom;
		}
	}
?>