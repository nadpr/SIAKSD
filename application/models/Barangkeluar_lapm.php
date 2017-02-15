<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Barangkeluar_lapm extends CI_Model
{
	function tampil()
	{
		$query = $this->db->query("Select * from barang_keluar");
		return $query;
	}
}
