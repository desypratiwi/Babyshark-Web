<?php
	class Kategori_Md extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function addKategori($data){
                    return $this->db->insert('tb_mst_kategori',$data);
                }
	}
?>