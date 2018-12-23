<?php
	class Kurir_Md extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function addKurir($data){
                    return $this->db->insert('tb_mst_kurir',$data);
                }
	}
?>