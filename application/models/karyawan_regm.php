<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan_regm extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

  public function index()
	{
    $this->load->database();
	}

  public function karyawan()
  {
    $karyawan_id = $_POST['id'];
		$karyawan_nm = $_POST['nama'];
    $username = $_POST['unama'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];
    $bagian = $_POST['bagian'];
		$no_telp = $_POST['no'];
    $foto = $_POST['foto'];

    $this->db->query("INSERT INTO karyawan values ('$karyawan_id','$karyawan_nm','$username','$password','$jabatan','$bagian','$no_telp','$foto')");
  }
}
