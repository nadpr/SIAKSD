<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Karyawan_lapm extends CI_Model
{
	function tampil()
	{
		$query = $this->db->query("Select * from karyawan");
		return $query;
	}
}
