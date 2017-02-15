<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_c extends CI_Controller {

  public function index()
	{
    $this->load->view('dashboard_v');
  //  $this->load->view('template/footer');
	}
}
