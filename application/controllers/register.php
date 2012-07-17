<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
    $this->load->model('mail');
    $this->load->model('categoria');
    $this->load->helper('form');
    $this->load->library('recaptcha');
    $this->lang->load('recaptcha');
    $this->load->helper('url'); 
  }

  public function index()
  {
    $this->data['recaptcha'] = $this->recaptcha->get_html();
    $menuData["categories"] = $this->categoria->get_categories(6);
    $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
    $this->data["buscarDiv"] = $buscarDiv;
    $this->load->view('registro',$this->data);
    $this->load->view("pie", $menuData);
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
    
    $this->form_validation->set_message('required', 'Debes ingresar un %s. ');
    
    if ($this->form_validation->run() === FALSE || $this->check_captcha($this->input->post('recaptcha_response_field')) == FALSE)
    {
      $this->load->view('registro',array('recaptcha'=>$this->recaptcha->get_html(), 'errorMsg' => "Alguno de los valores ingresados no es correcto."));
    }
    else
    {
      $user = $this->user->getById($this->input->post('id'));
      $action = "create";
      if ($user == null)
      {
        if($this->input->post('password') == "")
        {
          $this->load->view('registro',array('recaptcha'=>$this->recaptcha->get_html(), 'errorMsg' => "Debes ingresar una clave para crear un usuario."));
          return;
        }
        $result = $this->user->create();
        $id = $this->db->insert_id();
      } else {
        $action = "update";
        $result = $this->user->update();
        $id = $this->input->post('id');
      }
      $menuData["categories"] = $this->categoria->get_categories(6);
      $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
      $this->data["buscarDiv"] = $buscarDiv;
      if ($result == true)
      {
        if ($action == "create")
        {
          $this->mail->send_mail('Mail_Nvo_Registro', array('mail' => addslashes($this->input->post('email')), 
                                                          'clave' => addslashes($this->input->post('password'))));
                                                          
          $this->mail->send_mail('Mail_admin', array('mail' => addslashes("martin@seemple.com.ar"), 
                                                     'Id' => $id, 
                                                     'Nombre' => $this->input->post('nombre'),
                                                     'Apellido' => $this->input->post('apellido'),
                                                     'UserEmail' => $this->input->post('email')));
          $this->data['conf_title'] = "Registro";
          $this->data['message'] = 'Tus datos ha sido enviados correctamente. <br /> A la brevedad recibirás un correo confirmando tu solicitud de registro';
          $this->load->view('confirmacion', $this->data);
        } else {
          $this->data['conf_title'] = "Mis datos";
          $this->data['message'] = 'Tus datos han sido actualizados correctamente.';
          $this->load->view('confirmacion', $this->data);
        }
      } else {
        $this->data['errorMsg'] = "El usuario ya existe en nuestra base de datos, Pruebe con otro email.";
        $this->load->view('error', $this->data);
		    $this->load->view("pie", $menuData);
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
        $menuData["categories"] = $this->categoria->get_categories(6);
        $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
        $this->data["buscarDiv"] = $buscarDiv;
        
        $this->load->view('registro', $this->data);
		    $this->load->view("pie", $menuData);
      }    
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }  
  }
}