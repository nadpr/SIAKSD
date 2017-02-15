<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  function __construct()
  	{
  		parent::__construct();
      //  $this->simple_login->cek_login();
  			$this->load->model('karyawan_regm');
  			$this->model = $this->karyawan_regm;
  			$this->load->helper('form','table');
  	}

    public function index()
  	{
//      $this->load->view('template/header');
      $this->load->view('Laporan_v');
//      $this->load->view('template/footer');

  	}
}
