<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ampliar extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('anuncio');
  }
  
  public function index($id)
  {
    $session_data = $this->session->userdata('loggedin');
    $data['name'] = $session_data['name'];
    $data['username'] = $session_data['username'];
    $data['obras'] = $this->anuncio->get_obras_id($id);
    $this->load->view('ampliar_obra', $data);
  }
  
}