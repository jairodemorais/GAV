<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
     $this->load->model('anuncio');
     $this->load->library('pagination');
  }
  
  public function index()
  {
    $this->load->view('listado');
	$this->load->view("pie");
  }
  
  public function find($letter)
  {
    if($this->uri->segment(4) == ""){
      $offset = 0;
    } else {
      $offset = $this->uri->segment(4);
    }
    if($letter[0] == '-')
    {
      if($this->input->post('artist_value') != ""){
        $this->session->set_userdata('artist_value', $this->input->post('artist_value'));
      }
      $artists = $this->anuncio->get_artists_by_value($this->session->userdata('artist_value'),10,$offset);
      $config['total_rows'] = $this->anuncio->get_artists_by_value($this->session->userdata('artist_value'),0,0)->num_rows();
    } else
    {
      $artists = $this->anuncio->get_artists_by_letter($letter[0], 10,$offset);
      $config['total_rows'] = $this->anuncio->get_artists_by_letter($letter[0],0,0)->num_rows();
    }

    $config['uri_segment'] = '4';
    $config['base_url'] = base_url().'artist/find/'.$letter[0];
    $config['per_page'] = '10';
    $config['full_tag_open'] = '<ul id="paginador">';
    $config['full_tag_close'] = '</ul>';
    
    $config['next_link'] = 'Pagina siguiente &gt;';
    $config['next_tag_open'] = '<li class="pages_txt">';
    $config['next_tag_close'] = '</li>';
    
    $config['prev_link'] = '&lt; Pagina anterior';
    $config['prev_tag_open'] = '<li class="pages_txt">';
    $config['prev_tag_close'] = '</li>';
    
    $config['num_tag_open'] = '<li class="pages_num">';
    $config['num_tag_close'] = '</li>';
    
    $config['cur_tag_open'] = '<li class="pages_txt">';
    $config['cur_tag_close'] = '</li>';
    
    $config['last_link'] = 'Ultima pagina &gt;&gt;';
    $config['last_tag_open'] = '<li class="pages_txt">';
    $config['last_tag_close'] = '</li>';
    
    $config['first_link'] = '&lt;&lt; Primer pagina';
    $config['first_tag_open'] = '<li class="pages_txt>';
    $config['first_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    if($artists->num_rows() > 0)
    {
    $data['artists'] = $artists->result();
    } else 
    {
      $data['errorMsg'] = "No se encontraron artistas para su busqueda. Vuelva a intentarlo";
    }
    $this->load->view('listado', $data);
    $this->load->view('pie');
  }
  
  public function get($id)
  {
    $data['artista'] = $this->anuncio->get_artists_by_id($id);
    $data['obras'] = $this->anuncio->get_obras($id);
    $this->load->view('detalle_artista', $data);
    $this->load->view('pie');
  }
}