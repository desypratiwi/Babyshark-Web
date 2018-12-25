<?php

class Order_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function allOrders() {
        $q = "SELECT
                od.id_order,
                od.tgl_order,
                od.total_pembayaran,
                cs.nama_customer,
                cs.email,
                st.status_order
        FROM
                tb_tr_order od
        LEFT JOIN tb_mst_customer cs ON od.id_customer = cs.id_customer
        LEFT JOIN tb_hlp_status st ON st.id_status = od.id_status";
        return $this->db->query($q)->result();
//        return $this->db->get('tb_tr_order')->result();
    }

    public function getOrder($id) {
        return $this->db->get('tb_tr_order', $id)->row();
    }

    public function updateOrder($data, $id) {
        $this->db->where('id_order', $id);
        return $this->db->update('tb_tr_order', $data);
    }

}

?>