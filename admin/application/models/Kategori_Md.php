<?php

class Kategori_Md extends CI_model {
    public $DB = "tb_mst_kategori";
    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }
	
    public function addKategori($data) {
        return $this->db->insert('tb_mst_kategori', $data);
    }

    public function allKategori() {
		//$sql = "Select * from tb_mst_kategori";
		//$query = $this->db->query($sql);
		//return $query->result();
		$query = $this->db->get("tb_mst_kategori");
        return $query->result();
    }
    public function getKategori($id){
        $this->db->where('id_kategori',$id);
        return $this->db->get("tb_mst_kategori")->row();
    }
    public function deleteKategori($id){
        $this->db->where('id_kategori',$id);
        return $this->db->delete('tb_mst_kategori');
    }
    public function updateKategori($data,$id){
        $this->db->where('id_kategori',$id);
        return $this->db->update($this->DB,$data);
    }

}

?>