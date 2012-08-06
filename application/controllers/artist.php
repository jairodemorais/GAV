<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Artist extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
     $this->load->model('anuncio');
     $this->load->model('categoria');
     $this->load->library('pagination');
  }
  
  public function index()
  {
    if($this->uri->segment(3) == ""){
      $offset = 0;
    } else {
      $offset = $this->uri->segment(3);
    }
    $artists = $this->anuncio->get_artists(15, $offset);

    $config = $this->get_page_config();
    $config['uri_segment'] = '3';
    $config['base_url'] = base_url().'buscar/todos';
	$config['num_links'] = 2;
    //query para contar el total de anuncios
    $config['total_rows'] = $this->anuncio->get_artists(0, 0)->num_rows();
	$config['per_page'] = 15; 
	$config['full_tag_open'] = "<ul id='paginador'>";
	$config['full_tag_close'] = '</ul>';
	$config['prev_link'] = 'Anterior';
	$config['next_link'] = 'Siguiente';
	$config['cur_tag_open'] = "<span class='current'>";
	$config['cur_tag_close'] = '</span>';
	
	$this->pagination->initialize($config);

    $data['artists'] = $artists->result();
    $data["title"] = "Resultados de busqueda";
    $menuData["categories"] = $this->categoria->get_categories(6);
    $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
    $data["buscarDiv"] = $buscarDiv;
    
    $session_data = $this->session->userdata('loggedin');
    $data['name'] = $session_data['name'];
    $data['username'] = $session_data['username'];
    
    $this->load->view('listado', $data);
    $this->load->view('pie', $menuData);
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
      $artists = $this->anuncio->get_artists_by_value($this->session->userdata('artist_value'),15,$offset);
      $config['total_rows'] = $this->anuncio->get_artists_by_value($this->session->userdata('artist_value'),0,0)->num_rows();
    } else
    {
      $artists = $this->anuncio->get_artists_by_letter($letter[0], 15,$offset);
      $config['total_rows'] = $this->anuncio->get_artists_by_letter($letter[0],0,0)->num_rows();
    }
    
    $config = $this->get_page_config();
    $config['uri_segment'] = '4';
    $config['base_url'] = base_url().'artist/find/'.$letter[0];
    $this->pagination->initialize($config);
    
    if($artists->num_rows() > 0)
    {
    $data['artists'] = $artists->result();
    } else 
    {
      $data['errorMsg'] = "No se encontraron artistas para su busqueda. Vuelva a intentarlo";
    }
    $data["title"] = "Resultados de busqueda";
    $menuData["categories"] = $this->categoria->get_categories(6);
    $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
    $data["buscarDiv"] = $buscarDiv;
    $session_data = $this->session->userdata('loggedin');
    $data['name'] = $session_data['name'];
    $data['username'] = $session_data['username'];
    
    $this->load->view('listado', $data);
    $this->load->view('pie', $menuData);
  }
  
  public function get($id)
  {
    $data['artista'] = $this->anuncio->get_artists_by_id($id);
    $data['obras'] = $this->anuncio->get_obras($id);
    $menuData["categories"] = $this->categoria->get_categories(6);
    $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
    $data["buscarDiv"] = $buscarDiv;
    $session_data = $this->session->userdata('loggedin');
    $data['name'] = $session_data['name'];
    $data['username'] = $session_data['username'];
    
    $this->load->view('detalle_artista', $data);
    $this->load->view('pie', $menuData);
  }
  public function find_by_category($id)
  {
    if($this->uri->segment(5) == ""){
      $offset = 0;
    } else {
      $offset = $this->uri->segment(5);
    }
    $artists = $this->anuncio->get_artists_by_category($id, 15, $offset);

    $config = $this->get_page_config();
    $config['total_rows'] = $this->anuncio->get_artists_by_category($id, 0, 0)->num_rows();
    $config['uri_segment'] = '5';
    $config['base_url'] = base_url().'artist/find_by_category/'.$id;

    $this->pagination->initialize($config);
    if($artists->num_rows() > 0)
    {
      $data['artists'] = $artists->result();
    } else 
    {
      $data['errorMsg'] = "No se encontraron artistas para su busqueda. Vuelva a intentarlo";
    }
    $menuData["categories"] = $this->categoria->get_categories(6);
    foreach ($menuData["categories"] as $value) 
    {
      if ($value["Id"] == $id) {
        $data["title"] = $value["Nombre"];
        break;
      }
    }
    $buscarDiv = $this->load->view('buscar_artistas_form', $menuData, TRUE );
    $session_data = $this->session->userdata('loggedin');
    $data['name'] = $session_data['name'];
    $data['username'] = $session_data['username'];
    $data["buscarDiv"] = $buscarDiv;
    $data["categorySearch"] = true;
    $this->load->view('listado', $data);
    $this->load->view('pie', $menuData);
  }
  
  function get_page_config()
  {
    $config['per_page'] = '15';
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
    
    return $config;
  }
}