<?php
	class c_karyawan extends CI_Controller
{
	public $model;
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('m_karyawan');
		$this->model = $this->m_karyawan;
		$this->load->helper('url'); //fungsi dari CI
		//$this->load->views('karyawan_view');
	}

	public function index(){
		$query = $this->model->getquery();
		$data['query']=$query;
		$this->load->view('tb_karyawan',$data);
	}


	public function hapus($id){
		$this->m_karyawan->hapus_data($id);
		redirect('c_karyawan');
	}
	public function edit($id){
		$where = array('karyawan_id' => $id);
		$data['karyawan'] = $this->m_karyawan->edit_data($where, 'karyawan') ->result();
		$this->load->view('edit_karyawan',$data);
	}

	public function update(){
		$karyawan_id = $this->input->post('karyawan_id');
		$karyawan_nm = $this->input->post('karyawan_nm');
		$alamat = $this->input->post('alamat');
		$jabatan = $this->input->post('jabatan');
		$no_telp = $this->input->post('no_telp');

		//echo $karyawan_id." ".$karyawan_nm." ".$harga_beli." ".$harga_jual;
		$data = array(
			'karyawan_nm' => $karyawan_nm,
			'alamat' => $alamat,
			'jabatan' => $jabatan,
			'no_telp'=> $no_telp
			);

		$where = array(
			'karyawan_id' => $karyawan_id );

		$this->m_karyawan->update_data($where, $data, 'karyawan');
		$query = $this->m_karyawan->getquery();
		$data['query']=$query;
		$this->load->view('tb_karyawan',$data);
		///$this->db->where('karyawan_id',$id);
		//$this->db->update('karyawan',$data);
	} 


}
?>