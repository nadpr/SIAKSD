<?php
	//defined('BASEPATH') or exit('No direct script access allowed');
	class c_barangmasuk extends CI_Controller{
		function __contruct(){
			parent::__construct();
			$this->load->model('m_barangmasuk');
			$this->model = $this->m_barangmasuk;

			$this->load->helper('url'); //fungsi dari CI
			$this->load->helper(array('form'));
			 $this->load->helper('form_helper');
			}
		public function index(){
			$this->load->model('m_barangmasuk');
			$this->model = $this->m_barangmasuk;
			$this->create();
		}
		public function tambah(){
			$this->load->model('m_barangmasuk');
			$this->model = $this->m_barangmasuk;
			$this->m_barangmasuk->input_data();
			$query = $this->m_barangmasuk->get_masuk();
			$data['query']=$query;
			site_url('c_barangmasuk/index');
		}

		public function create(){
			$this->load->model('m_barangmasuk');
			$this->model = $this->m_barangmasuk;
			
			$query = $this->model->getquery();
			$data['query']= $query;
        	$this->load->view('barangmasuk', $data);
		}
		
	}

		 


?>