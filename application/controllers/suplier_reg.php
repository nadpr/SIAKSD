<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suplier_reg extends CI_Controller {

  function __construct()
  	{
  		parent::__construct();
        //$this->simple_login->cek_login();
        $this->load->model('suplier_regm');
  			$this->model = $this->suplier_regm;
  			$this->load->helper('form','url','table');
  	}

    public function index()
  	{
//      $this->load->view('template/header');
      $this->load->view('suplier_regv');
//      $this->load->view('template/footer');

  	}
  	public function sup()
  	{
  		$this->suplier_regm->suplier();
  		$this->load->view('');
  	}
}
