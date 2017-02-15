<?php
	class m_barangKeluar extends CI_Model{
		function __construct()
		{
			parent ::__construct();
			$this->load->database();
		}
		public function getquery(){
			$this->db->select('barang_id, barang_nm, department_id harga_beli, harga_jual, stok, supplier_id');
			$this->db->from('barang');
			$query = $this->db->get();
			return $query;
		}

		public function get_unit(){
			$this->db->select('unit_id, unit_nm, alamat, lokasi');
			$this->db->from('unit');
			$query = $this->db->get();
			return $query;
		}

		public function get_karyawan(){
			$this->db->select('karyawan_id, karyawan_nm, alamat');
			$this->db->from('karyawan');
			$query = $this->db->get();
			return $query;
		}

		public function input_data(){
		// $unit_id = $_POST['unit_id'];
			$barang_id = $this->input->post('barang_id');
			// $barang_nm = $this->input->post('barang_nm');
			$unit_id = $this->input->post('unit_id');
			// $harga_jual = $this->input->post('harga_jual');
			$jumlah = $this->input->post('jumlah');
			$karyawan_id = $this->input->post('karyawan_id');
			$tanggal = date('Y-m-d H:i:s');
			$barang_nm = "opo";
			$this->db->query("INSERT INTO barang_keluar values ('','$tanggal','$barang_id', '$barang_nm', '$unit_id', '$jumlah', '$karyawan_id')");
			$this->db->query("UPDATE barang SET stok = stok - $jumlah");
		}
		public function get(){
			$this->db->select('keluar_id, tanggal, barang_id, barang_nm, unit_id jumlah, karyawan_id');
			$this->db->from('barang_keluar');
			$query = $this->db->get();
			return $query;
		}

		function getById($id) {
     	   return $this->db->get_where('barang_keluar', array('keluar_id' => $id))->row();
    	}
		// function dd_unit()
  //   	{
  //      	 // ambil data dari db
  //      		 $this->db->order_by('unit_nm', 'asc');
  //       	$result = $this->db->get('unit');
        	
  //       // bikin array
  //       	// please select berikut ini merupakan tambahan saja agar saat pertama
  //       	// diload akan ditampilkan text please select.
  //       	$dd[''] = 'Please Select';
  //       	if ($result->num_rows() > 0) {
  //      	 	    foreach ($result->result() as $row) {
  //         	  // tentukan value (sebelah kiri) dan labelnya (sebelah kanan)
  //      	  	       $dd[$row->unit_id] = $row->unit_nm;
  //      	     	}
  //      	 	}
  //      	 return $dd;
  //   	}

    	
		
}
?>

