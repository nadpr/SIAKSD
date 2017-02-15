<?php
	class m_karyawan extends CI_Model
	{
		
		function __construct()
		{
		parent::__construct();
		$this->load->database();
		}
	

	public function getquery(){
		$this->db->select('karyawan_id, karyawan_nm, jabatan, alamat, no_telp');
		$this->db->from('karyawan');
		$query = $this->db->get();
		return $query;
	}

	function getById($id) {
        return $this->db->get_where('karyawan', array('karyawan_id' => $id))->row();
    }
	function hapus_data($id){
		$this->db->where('karyawan_id',$id);
		$this->db->delete('karyawan');
	}


    function edit_data($where, $table){
    	return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table){
    	$this->db->where($where);
    	$this->db->update('karyawan',$data);
    }

}
?>