<?php
	class keluar_model extends CI_Model
	{
		
		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}
	

	public function getquery(){
		$this->db->select('keluar_id, tanggal, barang_id, barang_nm, unit_id, jumlah, karyawan_id');
		$this->db->from('barang_keluar');
		$query = $this->db->get();
		return $query;
	}

	// -- DETAIL -- //
	function getDetail($id) {
        return $this->db->get_where('barang_keluar', array('keluar_id' => $id))->row();
    }
}
?>
