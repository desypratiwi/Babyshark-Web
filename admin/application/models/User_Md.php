<?php

class User_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }

    public function allUsers() {
        $q = "SELECT
	*
        FROM
                tb_user us
        LEFT JOIN tb_role r ON us.id_role = r.id_role";
//        return $this->db->get('tb_user')->result();
        return $this->db->query($q)->result();
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