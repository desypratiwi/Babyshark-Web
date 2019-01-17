<?php
	class M_banner extends CI_model{
		//fungsi menampilkan data gambar
		public function getData(){
			return $this->db->get('tb_banner_promo')->result();
		}

		public function databaseName($name){
			$data = array(
				'id_banner' => '',
				'nama_file' => $name,
				'deskripsi'=>$this->input->post('desc')
			);
			$this->db->insert('tb_banner_promo',$data);
		}
	}
		
?>