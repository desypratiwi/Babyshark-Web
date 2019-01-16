<?php
	class M_banner extends CI_model{
		//fungsi menampilkan data gambar
		public function view(){
			return $this->db->get('tb_banner_promo')->result();
		}

		public function databaseName($name){
			$data = array(
				'id_banner' => '',
				'nama_file' => $name
			);
			$this->db->insert('tb_banner_promo',$data);
		}
	}
		
?>