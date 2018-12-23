<?php

class User_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function allUsers() {
        return $this->db->get('tb_user')->result();
    }

    public function getUser($id) {
        return $this->db->get('tb_user', $id)->row();
    }

    public function updateUser($data,$id){
        $this->db->where('id_user',$id);
        return $this->db->update('tb_user',$data);
    }
}

?>