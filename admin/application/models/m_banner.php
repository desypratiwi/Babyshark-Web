<?php
	class M_banner extends CI_model{
		//fungsi menampilkan data gambar
		public function view(){
			return $this->db->get('tb_banner_promo')->result();
		}

		//fungsi untuk proses upload file
		public function upload(){
			$config['upload_path']   = './admin/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = 100;
			$config['max_width']     = 1024;
			$config['max_height']    = 768;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('input_banner')){

				//jika berhasil
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			}
			else{
				//jika gagal
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}

		}
		//fungsi menyimpan data ke database
		public function save($upload){
			$data = array(
				'id_banner'=>$upload['file']['id'],
				'f_banner'=>$upload['file']['nama_file'],
				'l_banner'=>$upload['file']['link_banner'],
				'desc'=>$this->input->post('input_desc'));
			$this->db->insert('tb_banner_promo', $data);
		}
			
		}
		
?>