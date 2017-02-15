<?php
	class m_supplier extends CI_Model
	{
		
		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}
	

	public function getquery(){
		$this->db->select('supplier_id, supplier_nm, alamat, department_id');
		$this->db->from('supplier');
		$query = $this->db->get();
		return $query;
	}

	function getById($id) {
        return $this->db->get_where('supplier', array('supplier_id' => $id))->row();
    }

	function hapus_data($id){
		$this->db->where('supplier_id', $id);
		$this->db->delete('supplier');
	}
	

    function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
    	$this->db->where($where);
    	$this->db->update('supplier',$data);
    }
	
	function getDetail($id) {
        return $this->db->get_where('supplier', array('supplier_id' => $id))->row();
    }
}
?>