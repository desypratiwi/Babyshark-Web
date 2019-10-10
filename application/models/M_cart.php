<?php

class M_cart extends CI_Model {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	
	public function getKurir(){
		return $this->db->get('tb_mst_kurir')->result();
	}

	public function getAll(){
		return $this->db->query("SELECT tb_mst_produk.nama_produk as nama_produk,
										tb_mst_produk.harga_jual as harga_jual,
										tb_tr_cart.jumlah as jumlah,
										tb_tr_cart.subtotal as subtotal,
										tb_tr_cart.id_barang as id_barang,
										tb_mst_produk.gambar as gambar
								FROM tb_mst_produk, tb_tr_cart 
								WHERE tb_mst_produk.id_produk=tb_tr_cart.id_barang")->result();
	}	

	public function getHarga($id){
		return $this->db->get_where('tb_mst_produk', array('id_produk' => $id))->row();
	}

	public function checkout($total,$kurir,$idC){
		$date = date("Y-m-d h:i:s");
		$data1 = array('id_order' => '',
						'tgl_order' => $date,
						'total_pembayaran' => $total,
						'id_pembayaran' => '0',
						'id_customer' => $idC,
						'id_status' => 'BM',
						'resi' => '0',
						'date_created' => $date,
						'date_modified' => $date
					);
		$this->db->insert('tb_tr_order', $data1);
		$this->db->reset_query();

		$this->db->where('id_customer' , $idC);
		$this->db->where('tgl_order' , $date);
		$dataOrder = $this->db->get('tb_tr_order')->row();
		$this->db->reset_query();

		$this->db->where('id_customer' , $idC);
		$dataCart = $this->db->get('tb_tr_cart')->result();
		$this->db->reset_query();

		foreach($dataCart as $row){
			$data2 = array('id_order' => $dataOrder->id_order, 
							'id_produk' => $row->id_barang,
							'banyak' => $row->jumlah,
							'subtotal' => $row->subtotal,
							'id_kurir' => $kurir);
			$this->db->insert('tb_tr_detail_order', $data2);
		}
		$this->db->reset_query();

		$this->db->where('id_customer', $idC);
		$this->db->delete('tb_tr_cart');
	}

	public function addToCart($harga,$idBr,$idCust = 7){
		
		$data = array('id_customer' => $idCust,
						'id_barang' => $idBr,
						'jumlah' => '1',
						'harga' => $harga,
						'subtotal' => $harga);

		$this->db->insert('tb_tr_cart', $data);
	}

	public function getQS($id_b, $id_c = 7){
		$this->db->select('jumlah, harga');
		$this->db->from('tb_tr_cart');
		$this->db->where('id_customer', $id_c);
		$this->db->where('id_barang', $id_b);
		return $this->db->get()->row();	
	}

	public function quantity($j,$h,$id_b,$id_c = 7){
		$data = array('jumlah' => $j,
						'subtotal' => $h);

		$this->db->where('id_customer', $id_c);
		$this->db->where('id_barang', $id_b);
		$this->db->update('tb_tr_cart', $data);
	}

	public function del($id_b,$id_c = 7){
		$this->db->where('id_customer', $id_c);
		$this->db->where('id_barang', $id_b);
		$this->db->delete('tb_tr_cart');
	}

	
}
