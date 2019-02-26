<?php
	class M_addbrand extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		public function allBrand (){
			$query = $this->db->get('tb_mst_brand');
			return $query->result();
		}
		public function insertBrand($data){
			$this->db->insert('tb_mst_brand',$data);
		}

		public function databaseG($name,$id){
			$data = array('logo' => $name);
			$this->db->where('id_brand',$id);
			$this->db->update('tb_mst_brand',$data);
		}
	}
?>