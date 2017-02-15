<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	class c_login extends CI_Controller{
		function __contruct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->helper('url'); //fungsi dari CI
			$this->load->helper('form');
			$this->load->model('Model_login');
		}
		public function index(){
			$this->load->view('login');
		}
		public function aksi_login(){
			$this->load->model('Model_login');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			
			$data = array(
				'username' =>$this->input->post('username'),
				'password' => md5($this->input->post('password'))
				);
			$cek = $this->Model_login->cek_login($data);
			if($cek == 1){
				$sessi = $this->session->set_userdata($data);
				redirect('c_barangKeluar');
			}else{
				echo "GAGAL";
				//$this->load->view('login');
			}
			
    
		}
		// function logout(){
		// 	$this->session->session_destroy();
		// 	redirect(base_url('login'));
		// }


	}


?>