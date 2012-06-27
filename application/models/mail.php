<?php
class Mail extends CI_Model {
  public function __construct()
  {
    $this->load->library('email');
    $config['charset'] = 'iso-8859-1';
    $config['mailtype'] = 'html';
    $this->email->initialize($config);
    $this->email->set_newline("\r\n");
  }
  PUBLIC function send_mail($template, $data)
  {
    $this->email->from('gav@seemple.com.ar', 'Gav');  
    $this->email->to($data['mail']); 
    $this->email->subject('Equipo Gav');
    $email = $this->load->view($template, $data, TRUE);
    $this->email->message($email);  
    $this->email->send();
  }
}