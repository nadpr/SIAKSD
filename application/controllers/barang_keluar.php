<?php
	class barang_keluar extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('keluar_model');
		$this->model = $this->keluar_model;
		$this->load->helper('url','form'); //fungsi dari CI
	}

	public function index(){
		$query = $this->keluar_model->getquery();
		$data['query']=$query;
		$this->load->view('keluar_view',$data);
	}

  	// -- DETAIL -- //
  	public function detail($id){
		$data['query'] = $this->keluar_model->getDetail($id);
		$this->load->view('keluar_detail',$data);
	} 
}
?>

 
  
