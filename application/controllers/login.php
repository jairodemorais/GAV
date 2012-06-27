<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LogIn extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('mail');
    $this->load->helper('form');
    $this->load->library('form_validation');
  }
  
  public function validateUser()
  {
    $this->form_validation->set_rules('usuario', 'Usuario', 'required');
    $this->form_validation->set_rules('clave', 'Clave', 'required');

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
  
  public function forgot()
  {
    $this->form_validation->set_rules('email', 'E-mail', 'required');
    if ($this->validatePostParams())
    {
      $user = $this->user->get(addslashes($this->input->post('email')));
      if ($user != null)
      {
        $this->mail->send_mail('Mail_Olvido_Pass.php', array('mail' => $user['Mail'], 
                                                        'clave' => $user['Password']));
      }
      echo 'true';
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