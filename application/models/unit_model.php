<?php
	class unit_model extends CI_Model
	{
		public $unit_id, $unit_nm, $lokasi, $alamat, $no_telp;
		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}


	public function getquery(){
		$this->db->select('unit_id, unit_nm, lokasi, alamat, no_telp');
		$this->db->from('unit');
		$query = $this->db->get();
		return $query;
	}

	/** public function index()
	{
    $this->load->database();
	}

	public function input_data(){
		$this->db->query("INSERT INTO unit values ('$unit_id','$unit_nm','$lokasi','$alamat','$no_telp')");
	} **/

	public function input_data(){
		// $unit_id = $_POST['unit_id'];
		$unit_id = $this->input->post('unit_id');
		$unit_nm = $this->input->post('unit_nm');
		$lokasi = $this->input->post('lokasi');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$this->db->query("INSERT INTO unit values ('$unit_id','$unit_nm','$lokasi','$alamat','$no_telp')");
	}

}
?>




 <!-- public function barang()
  {
    $id_brg = $_POST['id'];
    $nama_brg = $_POST['nama'];
    $departement = $_POST['departemen'];
    $hrg_beli = $_POST['beli'];
    $hrg_jual = $_POST['jual'];
    $stok = $_POST['stok'];
    $id_supplier = $_POST['idsup'];

    $this->db->query("INSERT INTO barang values ('$id_brg','$nama_brg','$departement','$hrg_beli','$hrg_jual','$stok','$id_supplier')");
  }
}
 -->
