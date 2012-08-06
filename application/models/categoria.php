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
	  $this->db->where('Categoria_padre', "");
	  $this->db->order_by("Nombre", "ASC"); 
      $query = $this->db->get('categorias', $qty, 0);
      return $query->result_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
  
  public function get_subcategories($cual)
  {
    try {
      $this->db->where('Estado <>', 2);
	  $this->db->order_by("Nombre", "ASC"); 
      $query = $this->db->get_where('categorias', array('Categoria_padre'=>$cual));
      return $query->result_array();
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