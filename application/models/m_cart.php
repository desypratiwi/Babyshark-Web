<?php

class M_cart extends CI_Model {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
		
	public function getHarga($id){
		return $this->db->get_where('tb_mst_produk', array('id_produk' => $id))->row();
	}

	public function addToCart($harga,$idBr,$idCust = 7){
		
		$data = array('id_customer' => $idCust,
						'id_barang' => $idBr,
						'jumlah' => '1',
						'subtotal' => $harga);

		$this->db->insert('tb_tr_cart', $data);
	}
}
