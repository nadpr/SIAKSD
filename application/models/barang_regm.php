<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_regm extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

  public function index()
	{
    $this->load->database();
	}

  public function barang()
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
