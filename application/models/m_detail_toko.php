<?php
	class M_detail_toko extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function getDetail($id){
			$custom = $this->db->get_where('tb_mst_vendor', array('id_vendor' => $id))->row();
			return $custom;
		}
	}
?>