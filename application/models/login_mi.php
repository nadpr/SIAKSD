<?php
  /**
   *
   */
  class login_mi extends CI_Model
  {

    function __construct()
    {
      # code...
      parent::__construct();
      $this->load->database();
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->library('session');
    }

    public function ambil_data($username,$password){
      $username = $this->input->post('username');
      $password = ($this->input->post('password'));
      $query = $this->db->query("SELECT * FROM karyawan WHERE username = '$username' and password = '$password'");

      if($query->num_rows()>0){
        foreach ($query->result() as $data) {
          $data = array(
            'username' => $data->username,
            'password' => $data->password
          );

          $this->session->set_userdata($data);
          redirect('dashboard_c',$data);
        }
      }
      else{
        $this->session->set_flashdata('message','username dan password salah');
        redirect('login_ci');
      }
    }
  }

 ?>
