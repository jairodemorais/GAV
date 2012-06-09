<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LogIn extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
    $this->load->helper('form');
    $this->load->library('form_validation');
  }
  
  public function validateUser()
  {
    $this->load->helper('form');

    if ($this->validatePostParams())
    {
      $user = $this->user->validateUser(); 
      if ($user != null)
      {
        $sess_array = array('username' => $user->Mail, 'name' => $user->Nombre);
        $this->session->set_userdata('loggedin', $sess_array);
        echo 'true';
      }
    } else {
      echo 'false';
    }
  }
  
  private function validatePostParams()
  {
    if ((empty($_POST['usuario'])) || (empty($_POST['clave']))) 
    {
      return FALSE;
    }
    return TRUE;
  }
  
  function logout()
  {
    $this->session->unset_userdata('loggedin');
    session_destroy();
  }
}