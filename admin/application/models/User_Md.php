<?php

class User_Md extends CI_model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
    }
    public function deleteUser($username){
        $this->db->where('username',$username);
        return $this->db->delete('tb_user');
    }
    public function insertUser($data){
        return $this->db->insert("tb_user",$data);
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
        $this->db->where("username",$id);
        return $this->db->get('tb_user')->row();
    }

    public function updateUser($data,$id){
        $this->db->where('id_user',$id);
        return $this->db->update('tb_user',$data);
    }
    public function getCustomer($usr){
        $q= "SELECT
                us.username,
                us.`password`,
                cs.nama_customer,
                cs.alamat,
                cs.kota,
                cs.email,
                cs.tgl_lahir,
                cs.telp_customer,
                us.id_role,
                cs.jk,
                rl.role
        FROM
                tb_user us
        LEFT JOIN tb_mst_customer cs ON us.username = cs.username
        LEFT JOIN tb_role rl ON us.id_role = rl.id_role
        WHERE
                us.username = '{$usr}'";
                
                return $this->query($q)->result();
    }
    public function getAllRole(){
        return $this->db->get("tb_role")->result();
        
        
    }
    public function getVendor($usr){
        $q= "SELECT
                us.username,
                us.nama,
                us.`password`,
                vn.nama_owner,
                vn.nama_vendor,
                vn.alamat_vendor,
                vn.kota_vendor,
                vn.email_vendor,
                us.no_telp,
                us.tgl_lahir,
                us.id_role,
                us.jk,
                rl.role,
                vn.logo
        FROM
                tb_user us
        LEFT JOIN tb_mst_vendor vn ON us.username = vn.username
        LEFT JOIN tb_role rl ON us.id_role = rl.id_role
        WHERE
                us.username = '{$usr}'";
                return $this->query($q)->result();
    }
    public function getDetailUser($usr){
        $q= "SELECT
                us.id_user,
                us.username,
                us.`password`,
                us.nama,
                us.no_telp,
                cs.nama_customer,
                cs.alamat,
                cs.kota,
                
                cs.email,
                cs.tgl_lahir,
                cs.telp_customer,
                us.id_role,
                cs.jk,
                cs.customer_aktif,
                vn.vendor_aktif,
                vn.nama_owner,
                vn.nama_vendor,
                vn.alamat_vendor,
                vn.kota_vendor,
                vn.email_vendor,
                vn.logo,
                rl.role
        FROM
                tb_user us
        LEFT JOIN tb_mst_customer cs ON us.username = cs.username
        LEFT JOIN tb_mst_vendor vn ON vn.username = us.username
        LEFT JOIN tb_role rl ON us.id_role = rl.id_role
        WHERE
                us.username = '{$usr}'";
        
        $hasil = $this->db->query($q)->row();
//       print_r($hasil);
        if($hasil->id_role=='1'){
            $hasil = $this->getUser($usr);
            return $hasil;
        }else{
            return $hasil;
        }
    }
    public function getRoles(){
        return $this->db->get('tb_role')->result();
    }
}

?>