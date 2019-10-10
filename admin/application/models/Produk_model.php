<?php
	class produk_model extends CI_model{
		public function __construct(){
			parent:: __construct();       
			$this->load->database();
		}
		public function insProduct($data){
			$this->db->insert('tb_mst_produk',$data);
			
		}
		public function getAllProduct (){
			$sql = "SELECT
				*
			FROM	
	tb_mst_produk pr
	LEFT JOIN tb_mst_kategori kt ON pr.id_kategori = kt.id_kategori
	LEFT JOIN tb_mst_brand br ON pr.id_brand = br.id_brand";
			$query = $this->db->query($sql);
			return $query->result();
		}
		public function getProductDetail($id){
			$sql = "SELECT
	*
FROM
	tb_mst_produk pr
	LEFT JOIN tb_mst_kategori kt ON pr.id_kategori = kt.id_kategori
	LEFT JOIN tb_mst_brand br ON pr.id_brand = br.id_brand
where pr.id_produk = {$id}";
			$query = $this->db->query($sql);
			return $query->row();
		}
		
		
	}
?>