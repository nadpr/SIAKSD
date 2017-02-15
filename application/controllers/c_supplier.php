<?php
	class c_supplier extends CI_Controller
{
	public $model;
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('m_supplier');
		$this->model = $this->m_supplier;
		$this->load->helper('url'); //fungsi dari CI
		//$this->load->views('supplier_view');
	}

	public function index(){
		$query = $this->model->getquery();
		$data['query']=$query;
		$this->load->view('tb_supplier',$data);
	}


	public function hapus($id){
		$this->m_supplier->hapus_data($id);
		redirect('c_supplier');
	}
	function edit($id){
		$where = array('supplier_id' => $id);
		$data['supplier'] = $this->m_supplier->edit_data($where, 'supplier') ->result();
		$this->load->view('edit_supplier',$data);
	}

	public function update(){
		$supplier_id = $this->input->post('supplier_id');
		$supplier_nm = $this->input->post('supplier_nm');
		$alamat = $this->input->post('alamat');
		$department_id = $this->input->post('department_id');

		//echo $karyawan_id." ".$karyawan_nm." ".$harga_beli." ".$harga_jual;
		$data = array(
			'supplier_nm' => $supplier_nm,
			'alamat' => $alamat,
			'department_id' => $department_id
			);

		$where = array(
			'supplier_id' => $supplier_id );

		$this->m_supplier->update_data($where, $data, 'supplier');
		$query = $this->m_supplier->getquery();
		$data['query']=$query;
		$this->load->view('tb_supplier',$data);
		///$this->db->where('karyawan_id',$id);
		//$this->db->update('karyawan',$data);
	} 

	public function detail($id){
		$data['query'] = $this->m_supplier->getDetail($id);
		$this->load->view('detail_supplier',$data);
	}
}
?>