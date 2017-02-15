<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class login_ci extends CI_Controller {
  function __construct()
	  {
    parent::__construct();
     $this->load->model('login_mi');
     $this->load->library('form_validation');
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->library('session');
     //  $this->load->view('template/footer');
	  }

  public function index(){
    $this->load->view('login_v');
  }
  public function validasi(){
    $this->login_mi->ambil_data();
  }
  public function logout(){
    $this->session->session_destroy();
    redirect('home');
  }
  public function cek_login() {

          //cek session username
          if($this->CI->session->userdata('username') == '') {

                  //set notifikasi
                  $this->CI->session->set_flashdata('sukses','Anda belum login');

                  //alihkan ke halaman login
                  redirect(site_url('login_ci'));
          }
  }
}
