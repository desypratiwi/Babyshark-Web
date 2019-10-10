<?php

class Kurir_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function allKurir() {
        return $this->db->get('tb_mst_kurir')->result();
    }

    public function getKurir($id) {
        $this->db->where("id_kurir",$id);
        return $this->db->get('tb_mst_kurir')->row();
    }

    public function addKurir($data) {
        return $this->db->insert('tb_mst_kurir', $data);
    }
    public function deleteKurir($id){
        $this->db->where('id_kurir',$id);
        return $this->db->delete("tb_mst_kurir");
    }
    public function editKurir($data,$id){
        $this->db->where("id_kurir",$id);
        return $this->db->update("tb_mst_kurir",$data);
    }

}

?>