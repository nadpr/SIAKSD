<?php
	class data_unit extends CI_Controller
{
	//public $model;
	function __construct()
	{
		parent:: __construct();
		$this->load->Model('unit_model');
		$this->model = $this->unit_model;
		$this->load->helper('url','form'); //fungsi dari CI
	}

	public function index(){
		$query = $this->unit_model->getquery();
		$data['query']=$query;
		$this->load->view('unit_view',$data);
	}

	public function tambah(){
		$this->load->view('tambah_unit');
	}

	public function tambah_aksi()
  	{
  		$this->unit_model->input_data();
  		$query = $this->unit_model->getquery();
		$data['query']=$query;
  		$this->load->view('unit_view',$data);
  	}


}
?>
