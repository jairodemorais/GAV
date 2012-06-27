<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('mail');
    $this->load->helper('form');
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
    
    $this->form_validation->set_message('required', 'Debes ingresar un %s. ');
    
    if ($this->form_validation->run() === FALSE || $this->check_captcha($this->input->post('recaptcha_response_field')) == FALSE)
    {
      $this->load->view('registro',array('recaptcha'=>$this->recaptcha->get_html(), 'errorMsg' => "Captcha invalido. Prueba nuevamente."));
    }
    else
    {
      $user = $this->user->getById($this->input->post('id'));
      $action = "create";
      if ($user == null)
      {
        $result = $this->user->create();
      } else {
        $action = "update";
        $result = $this->user->update();
      }
      if ($result == true)
      {
        if ($action == "create")
        {
          $this->mail->send_mail('Mail_Nvo_Registro', array('mail' => addslashes($this->input->post('email')), 
                                                          'clave' => addslashes($this->input->post('password'))));
          $this->mail->send_mail('Mail_admin', array('mail' => addslashes("jairodemorais@gmail.com"), 'user' => $user));
        }
        $this->load->view('confirmacion');
      } else {
        $data['errorMsg'] = "El usuario ya existe en nuestra base de datos, Pruebe con otro email.";
        $this->load->view('error', $data);
      }
    }
  }
  
  public function enable($id)
  {
    try {
      $result = $this->user->enable_user($id);
      if($result != null)
      {
        $this->mail->send_mail('Mail_Confirmacion_Registro', array('mail' => addslashes($result['Mail'])));
        echo "El usuario ".$result['Mail']." ha sido habilitado correctamente";
      }
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
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