<?php
	class masuk_model extends CI_Model
	{
	
		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}
	

	public function getquery(){
		$this->db->select('masuk_id, tanggal, barang_id, barang_nm, harga_beli, harga_jual, jumlah, supplier_id');
		$this->db->from('barang_masuk');
		$query = $this->db->get();
		return $query;
	}

	// -- DETAIL -- //
	function getDetail($id) {
        return $this->db->get_where('barang_masuk', array('masuk_id' => $id))->row();
    }
}
?>
