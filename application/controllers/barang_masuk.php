<?php
	class barang_masuk extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('masuk_model');
		$this->model = $this->masuk_model;
		$this->load->helper('url','form'); //fungsi dari CI
	}

	public function index(){
		$query = $this->masuk_model->getquery();
		$data['query']=$query;
		$this->load->view('masuk_view',$data);
	}

  	// -- DETAIL -- //
  	public function detail($id){
		$data['query'] = $this->masuk_model->getDetail($id);
		$this->load->view('masuk_detail',$data);
	} 
}
?>

 
  
