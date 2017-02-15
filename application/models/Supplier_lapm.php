<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Supplier_lapm extends CI_Model
{
	function tampil()
	{
		$query = $this->db->query("Select * from supplier");
		return $query;
	}
}
