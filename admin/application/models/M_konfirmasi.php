<?php
	class M_konfirmasi extends CI_model{
		//fungsi menampilkan data gambar
		public function getData(){
			return $this->db->get('tb_mst_pembayaran')->result();
		}

		public function databaseName($name){
			$data = array(
				'id_pembayaran' => '',
				'nama_file' => $name
			);
			$this->db->insert('tb_banner_promo',$data);
		}
	}
		
?>