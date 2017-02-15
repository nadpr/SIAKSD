<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang_reg extends CI_Controller {

  function __construct()
  	{
  		parent::__construct();
  			$this->load->model('barang_regm');
  			$this->model = $this->barang_regm;
  			$this->load->helper('form','table');
  	}

    public function index()
  	{
      $this->load->view('template/header');
      $this->load->view('barang_regv');
      $this->load->view('template/footer');

  	}
  	public function bar()
  	{
  		$this->barang_regm->barang();
  		$this->load->view('');
  	}
}
