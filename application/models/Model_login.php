<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Model_login extends CI_Model{
		public function __construct(){
           parent::__construct(); 
           $this->load->database();
     	}
		public function cek_login($data){
			$query = $this->db->get_where('karyawan', $data);
			return $query->num_rows();
		}

		public function cek()
		{
			return true;
		}
	}
?>




