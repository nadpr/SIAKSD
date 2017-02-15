<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class login_m extends CI_Model
  {
    function daftar($data)
    {
      $this->db->insert('karyawan',$data);
    }
  }

 ?>
