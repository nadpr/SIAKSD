<?php

class login_model extends CI_Model {
	
	public $nama, $nim, $prodi, $nilai;
	function __construct()
	{
		parent ::__construct();
		$this->load->database();
	}
	
	public function load_login($username, $password){
		$this->db->select('username','pass');
		$this->db->from('admin');
		$this->db->where('username',$username);
		$this->db->where('pass',$password);
		$this->db->limit(1);
		$query = $this->db-get();

		if($query -> num_rows() == 1){
			return $query->result();
		}else{
			return false;
		}
	}
	
}

