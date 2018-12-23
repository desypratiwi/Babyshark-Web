<?php

class Order_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function allOrders() {
        return $this->db->get('tb_tr_order')->result();
    }

    public function getOrder($id) {
        return $this->db->get('tb_tr_order', $id)->row();
    }

    public function updateOrder($data,$id){
        $this->db->where('id_order',$id);
        return $this->db->update('tb_tr_order',$data);
    }
}

?>