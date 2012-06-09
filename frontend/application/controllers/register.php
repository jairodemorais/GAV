<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('mail');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('recaptcha');
    $this->lang->load('recaptcha');
    $this->load->helper('url'); 
  }

	public function index()
	{
    $this->data['recaptcha'] = $this->recaptcha->get_html();
		$this->load->view('registro',$this->data);
	}
	
	function check_captcha($val) {
	  if ($this->recaptcha->check_answer($this->input->ip_address(),$this->input->post('recaptcha_challenge_field'),$val)) {
	    return TRUE;
	  } else {
	    $this->form_validation->set_message('check_captcha',$this->lang->line('recaptcha_incorrect_response'));
	    return FALSE;
	  }
	}
	
	public function updateOrCreate()
	{
	  $this->form_validation->set_rules('nombre', 'Nombre', 'required');
	  $this->form_validation->set_rules('apellido', 'Apellido', 'required');
	  $this->form_validation->set_rules('email', 'E-mail', 'required');
	  $this->form_validation->set_rules('password', 'Password', 'required');
	  
	  if ($this->form_validation->run() === FALSE || $this->check_captcha($this->input->post('recaptcha_response_field')) == FALSE)
	  {
		  echo "Debe completar todos los campos obligatorios.";
		  $this->load->view('registro',array('recaptcha'=>$this->recaptcha->get_html()));
	  }
	  else
	  {
	    $user = $this->user->get($this->input->post('id'));
	    if ($user == null)
	    {
	      $result = $this->user->create();
	      $this->mail->send_mail('Mail_Nvo_Registro', array('mail' => addslashes($this->input->post('email')), 
	                                                        'clave' => addslashes($this->input->post('password'))));
	    } else {
	      $result = $this->user->update();
	    }
		  if ($result == true)
	    {
	      $this->load->view('confirmacion');
	    } else {
	      $this->load->view('error');
	    }
	  }
  }
  
  public function get()
  {
    try {
      if(empty($this->data['name']))
      {
        redirect('home');
      } else {
        $this->data['user'] = $this->user->get($this->data['username']);
        $this->data['recaptcha'] = $this->recaptcha->get_html();
        $this->load->view('registro', $this->data);
      }    
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  
  }
}