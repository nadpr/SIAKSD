<?php
	class barang_model extends CI_Model
	{
		public $barang_id, $barang_nm, $department_id, $harga_beli, $harga_jual, $stok, $supplier_id;
		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}


	public function getquery(){
		$this->db->select('barang_id, barang_nm, department_id, harga_beli, harga_jual, stok, supplier_id');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query;
	}

	function hapus_data($id){
		$this->db->where('barang_id',$id);
		$this->db->delete(barang);
	}

	/** public function update($id){
		$nama_barang = $this->input->post('barang_nm');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$data = array(
			'barang_nm' => $barang_nm,
			'harga_beli' => $harga_beli,
			'harga_jual' => $harga_jual,
			);
		$this->db->where('barang_id',$id);
		$this->db->update('barang',$data);
	} */

	function getById($id) {
        return $this->db->get_where('barang', array('barang_id' => $id))->row();
    }

    function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
    	$this->db->where($where);
    	$this->db->update('barang',$data);
    }

	function getDetail($id) {
        return $this->db->get_where('barang', array('barang_id' => $id))->row();
    }


	/**  public function detail_barang($id){
		$this->db->
		$id_barang=mysql_real_escape_string($_GET['kode_barang']);
		$det=mysql_query("select * from barang where kode_barang='$id_barang'")or die(mysql_error());
	} */

}
?>
