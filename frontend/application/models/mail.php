<?php
class Mail extends CI_Model {
  public function __construct()
  {
    $config['wordwrap'] = TRUE;
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
    $config['smtp_port'] = 465;
    $config['smtp_user'] = 'userGmail';
    $config['smtp_pass'] = 'claveGmail';
    $config['mailtype']  = 'html'; 
    $config['charset']   = 'iso-8859-1';
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    
  }
  PUBLIC function send_mail($template, $data)
  {
    $this->email->from('jairodemorais@gmail.com', 'Jairo');  
    $this->email->to('jairodemorais@gmail.com'); 
    $this->email->subject('Email Test');
    $email = $this->load->view($template, $data, TRUE);
    $this->email->message($email);	
    $this->email->send();
  }
}