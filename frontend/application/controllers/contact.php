<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('recaptcha');
    $this->lang->load('recaptcha');
    $this->load->helper('url'); 
  }

	public function create()
	{
	  
	}
}