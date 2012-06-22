<?php
class Mail extends CI_Model {
  public function __construct()
  {
    $config['wordwrap'] = TRUE;
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'mail.seemple.com.ar';
    $config['smtp_port'] = 25;
    $config['smtp_user'] = 'gav@seemple.com.ar';
    $config['smtp_pass'] = '123gav@123';
    $config['mailtype']  = 'html'; 
    $config['charset']   = 'iso-8859-1';
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    
  }
  PUBLIC function send_mail($template, $data)
  {
    $this->email->from($this->config->item('smtp_user'), 'Gav');  
    $this->email->to($data['mail']); 
    $this->email->subject('Email Test');
    $email = $this->load->view($template, $data, TRUE);
    $this->email->message($email);	
    $this->email->send();
  }
}