<?php

class Informasi_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function getInformasi() {
        return $this->db->get('informasi_web')->row();
    }

    public function updateInformasi($data){
        return $this->db->update('informasi_web',$data);
    }
}

?>