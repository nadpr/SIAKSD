<?php
	class c_unit extends CI_Controller
{
	public $model;
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('m_unit');
		$this->model = $this->m_unit;
		$this->load->helper('url'); //fungsi dari CI
		//$this->load->views('barang_view');
	}

	public function index(){
		$query = $this->model->getquery();
		$data['query']=$query;
		$this->load->view('tb_unit',$data);
	}


	public function hapus($id){
		$this->m_supplier->hapus_data($id);
		redirect('c_unit');
	}
}
?>