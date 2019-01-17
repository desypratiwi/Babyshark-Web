<?php
	class M_konfirmasi extends CI_model{
		//fungsi menampilkan data gambar
		public function getStatus(){
			return $this->db->get('tb_tr_order')->result();
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