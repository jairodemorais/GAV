<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('recaptcha');
    $this->lang->load('recaptcha');
    $this->load->model('categoria');
    $this->load->helper('url'); 
    $this->load->model('mail');
  }

  public function create()
  {
    $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('Mail', 'Mail', 'required');
    $this->form_validation->set_rules('Comentario', 'Comentario', 'required');
    
    $this->form_validation->set_message('required', 'Debes ingresar un %s. ');
    
    if ($this->form_validation->run() === FALSE)
    {
      $menuData["categories"] = $this->categoria->get_categories(6);
    
      $menuDiv = $this->load->view('menu', $menuData, TRUE );
      $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
    
      $this->data["menuDiv"] = $menuDiv;
      $this->data["buscarDiv"] = $buscarDiv;
      $this->data["load_view"] = "contact";
      $this->load->view('index',$this->data);
    }
    else 
    {
     $this->mail->send_mail('Mail_contacto', array('mail' => addslashes("martin@seemple.com.ar"), 
                                                     'Nombre' => $this->input->post('Nombre'),
                                                     'UserMail' => $this->input->post('Mail'),
                                                     'Comentario' => $this->input->post('Comentario')));
      
      $menuData["categories"] = $this->categoria->get_categories(6);
      $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
      $this->data["buscarDiv"] = $buscarDiv;
      $this->data["message"] = "Su mensaje ha sido enviado, a la brevedad sera contactado por un integrante de nuestro equipo.";                                    
      $this->load->view("confirmacion", $this->data);
    }
  }
}