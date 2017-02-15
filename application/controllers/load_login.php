<?php
	class  load_login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url'); //fungsi dari CI
		$this->load->helper('form');
	}

	public function index(){
		if($this->session->userdata('logged_in')){
			http_redirect('home','refresh');
		}else{
			$this->load->helper(array('form'));
			$this->load->view('login');
		}
		$this->load->view('login');
	}

	public function validasi_login(){

		//kalau memang tidak ada rules maka ya tidak usah dibuat rules nya.
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('pass','password','required');
		$this->form_validation->set_rules('pass2','password ke 2','required|matches[pass]');

		if($this->form_validation->run()){
			$username = $this->input->post('username');
			$this->check_db($password);
		}
		else{
			$this->load->view('login');
		}
	}
	// public function check_db($password){
	// 	$username = $this->input->post('username');
	// 	$result = $this->user->login($username,$password);

	// 	if($result){
	// 	$session_array = array();
	// 	foreach ($result as $value) {
	// 		$session_array = array(
	// 				'username' =>$row->username,
	// 				'pass'=>$row->pass

	// 			);
	// 		$this->session->set_userdata('logged_in',$session_array);
	// 	}
	// 	return TRUE;
	// 	}else{
	// 		$this->form_validation->set_message('check_db','invalid username or password');
	// 		return FALSE;
	// 	}
	// }

	}


?>