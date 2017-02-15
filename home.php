<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

  public function index()
	{
//    $this->load->view('template/navbar');
    $this->load->view('template/header');
    $this->load->view('home_v');
    $this->load->view('template/footer');
	}
}
