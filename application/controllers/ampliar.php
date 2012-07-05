<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ampliar extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('anuncio');
  }
  
  public function index($id)
  {
    $data['obras'] = $this->anuncio->get_obras_id($id);
    $this->load->view('ampliar_obra', $data);
  }
  
}