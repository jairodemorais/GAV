<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
  function __construct()
  {
    parent::__construct();
    $session_data = $this->session->userdata('loggedin');
    $this->data['name'] = $session_data['name'];
    $this->data['username'] = $session_data['username'];
    $this->load->library('form_validation');
  }	
}