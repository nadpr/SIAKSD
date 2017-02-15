<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Barangmasuk_lapm extends CI_Model
{
	function tampil()
	{
		$query = $this->db->query("Select * from barang_masuk");
		return $query;
	}
}
