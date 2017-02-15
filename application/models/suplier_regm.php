<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suplier_regm extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

  public function index()
	{
    $this->load->database();
	}

  public function suplier()
  {
    $supplier_id = $_POST['id'];
    $supplier_nm = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $department_id = $_POST['departemen'];

    $this->db->query("INSERT INTO supplier values ('$supplier_id','$supplier_nm','$alamat','$department_id')");
  }
}
