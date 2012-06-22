<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }
	public function index()
	{
	  if (!empty($this->data['name']))
    {
      $this->load->view('index', $this->data);
    } else {
      $this->load->view('index');
    }	
	}
}