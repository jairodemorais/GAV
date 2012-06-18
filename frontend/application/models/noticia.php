<?php
class Noticia extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_news($num, $offset)
  {
    try {
      $this->db->order_by("Fecha", "desc");
      $query = $this->db->get('noticias', $num, $offset);
      return $query;
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get($id)
  {
    try {
      $query = $this->db->get_where('noticias',array('Id'=>$id));
      return $query->row_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}