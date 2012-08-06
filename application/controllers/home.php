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
    $menuData["sub"]["Servicios"] = $this->categoria->get_subcategories("Servicios");
    $menuData["sub"]["Dise&ntilde;adores"] = $this->categoria->get_subcategories("Dise&ntilde;adores");
    $menuData["sub"]["Capacitaci&oacute;n"] = $this->categoria->get_subcategories("Capacitaci&oacute;n");
    $menuData["sub"]["Exhibici&oacute;n"] = $this->categoria->get_subcategories("Exhibici&oacute;n");
    $menuData["sub"]["Insumos"] = $this->categoria->get_subcategories("Insumos");
    $menuData["sub"]["Artistas"] = $this->categoria->get_subcategories("Artistas");
    $menuDiv = $this->load->view('menu', $menuData, TRUE );
    $buscarDiv = $this->load->view('buscar_artistas_sin_cat', $menuData, TRUE );
    $this->data["menuDiv"] = $menuDiv;
    $this->data["buscarDiv"] = $buscarDiv;
    $this->load->view('index', $this->data);
  }
}