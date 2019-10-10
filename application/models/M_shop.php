<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shop extends CI_Model {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	public function getAll(){
		$r = $this->db->get('tb_mst_produk')->result();
		return $r;
	}

	public function getByBrand($id){
		$this->db->where('id_brand',$id);
		$r = $this->db->get('tb_mst_produk')->result();
		return $r;
	}

	public function getByKat($id){
		$this->db->where('id_kategori',$id);
		$r = $this->db->get('tb_mst_produk')->result();
		return $r;
	}

	public function getBySearch($id){
		$this->db->where('nama_produk',$id,'both');
		$r = $this->db->get('tb_mst_produk')->result();
		return $r;
	}
}
?>
