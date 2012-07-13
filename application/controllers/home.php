<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url');
    $this->load->model('categoria');
  }
  public function index()
  {
    $menuData["categories"] = $this->categoria->get_categories(6);
    $menuDiv = $this->load->view('menu', $menuData, TRUE );
    $buscarDiv = $this->load->view('buscar_artistas_sin_cat', $menuData, TRUE );
    $this->data["menuDiv"] = $menuDiv;
    $this->data["buscarDiv"] = $buscarDiv;
    $this->load->view('index', $this->data);
  }
}