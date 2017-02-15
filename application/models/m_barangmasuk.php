<?php
	class m_barangmasuk extends CI_Model{
		function __construct()
		{
			parent ::__construct();
			$this->load->database();
		}
		
		public function input_data(){
		// $unit_id = $_POST['unit_id'];
			$barang_id = $this->input->post('barang_id');
			// $barang_nm = $this->input->post('barang_nm');
			$unit_id = $this->input->post('unit_id');
			$harga_beli = $this->input->post('harga_beli');
			$harga_jual = $this->input->post('harga_jual');


			$jumlah = $this->input->post('jumlah');
			$supplier_id = $this->input->post('supplier_id');
			$tanggal = date('Y-m-d H:i:s');
			$barang_nm = "opo";
			$this->db->query("INSERT INTO barang_masuk values ('','$tanggal','$barang_id', '$barang_nm', '$harga_beli', '$harga_jual', '$jumlah', '$supplier_id')");
			$this->db->query("UPDATE barang SET stok = stok + $jumlah");
		}
		
		public function get_masuk(){
			$this->db->select('masuk_id, tanggal, barang_id, barang_nm, harga_beli, harga_jual, jumlah, supplier_id');
			$this->db->from('barang_masuk');
			$query = $this->db->get();
			return $query;
		}
		function getById($id) {
     	   return $this->db->get_where('barang_masuk', array('masuk_id' => $id))->row();
    	}

    	public function getquery(){
			$this->db->select('barang_id, barang_nm, department_id harga_beli, harga_jual, stok, supplier_id');
			$this->db->from('barang');
			$query = $this->db->get();
			return $query;
		}
		
}
?>

