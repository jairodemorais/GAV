<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url'); 
    $this->load->model('mail');
  }

  public function create()
  {
    $this->mail->send_mail('Mail_contacto', array('mail' => addslashes("martin@seemple.com.ar"), 
                                                  'Nombre' => $this->input->post('Nombre'),
                                                  'UserMail' => $this->input->post('Mail'),
                                                  'Comentario' => $this->input->post('Comentario')));
    echo 'true';
  }
}