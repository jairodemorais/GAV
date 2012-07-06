<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newsboard extends MY_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('noticia');
    $this->load->library('pagination');
  }
  
  public function index()
  {

    $config['uri_segment'] = '2';
    $config['total_rows'] = $this->db->count_all('noticias');;
    $config['base_url'] = base_url().'newsboard';
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
    $noticias = $this->noticia->get_news($config['per_page'],$this->uri->segment(2));
    
    if($noticias->num_rows() > 0)
    {
      $data['noticias'] = $noticias->result();
    } else 
    {
      $data['errorMsg'] = "No se encontraron noticias. Vuelva a intentarlo";
    }
    $this->load->view("newsboard", $data);
    $this->load->view("pie");
  }
  
  public function get($id){
    $data['noticia'] = $this->noticia->get($id);
    $this->load->view("ampliar_novedades", $data);
    $this->load->view("pie");
  }
}