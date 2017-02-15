<?php
	//defined('BASEPATH') or exit('No direct script access allowed');
	class c_barangKeluar extends CI_Controller{
		function __contruct(){
			parent::__construct();
			$this->load->model('m_barangKeluar');
			$this->model = $this->m_barangKeluar;
			$this->load->helper('url'); //fungsi dari CI
			$this->load->helper(array('form'));
			 $this->load->helper('form_helper');
			}
		public function index(){
			$this->create();
		}
		public function tambah(){
			$this->load->model('m_barangKeluar');
			$this->model = $this->m_barangKeluar;
			$this->m_barangKeluar->input_data();
			$query = $this->m_barangKeluar->get();
			$data['query']=$query;
			$this->load->view('barang_keluar');
		}

		public function create(){
			$this->load->model('m_barangKeluar');
			$this->model = $this->m_barangKeluar;
			
			$query = $this->model->getquery();
			$data['query']= $query;
			$unit = $this->model->get_unit();
			$data['data'] = $unit;
			$kary = $this->model->get_karyawan();
        
        	$this->load->view('barang_keluar',$data);
		}
		

		 
	}


?>