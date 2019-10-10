<?php
	class M_vorder extends CI_model{
		public function __construct(){
			parent:: __construct();
			$this->load->database();
		}
		
		public function allVorder (){
			$query = $this->db->query("SELECT o.id_order,o.tgl_order, o.total_pembayaran, o.id_status, o.resi, c.nama_customer FROM tb_mst_customer as c, tb_tr_order as o WHERE c.id_customer = o.id_customer AND (o.id_status = 'MKPE' OR o.id_status = 'SDPP' OR o.id_status = 'DK') ");
			
			return $query->result();
		}

		public function confirm($id){
			$data = array('id_status' => 'SDPP' );
			$this->db->where('id_order', $id);
			$this->db->update('tb_tr_order', $data);
		}

		public function kirim($id,$resi){
			$data = array('id_status' => 'DK',
							'resi' => $resi);
			$this->db->where('id_order', $id);
			$this->db->update('tb_tr_order', $data);
		}
		
	}
?>