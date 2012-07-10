<?php
class Categoria extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }

  public function get_categories($qty)
  {
    try {
      $this->db->where('Estado <>', 2);
      $query = $this->db->get('categorias', $qty, 0);
      return $query->result();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get($id)
  {
    try {
      $this->db->where('Estado <>', 2);
      $query = $this->db->get_where('categorias',array('Id'=>$id));
      return $query->row_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}