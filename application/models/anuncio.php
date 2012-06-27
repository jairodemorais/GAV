<?php
class Anuncio extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function get_artists_by_letter($letter,$num, $offset)
  {
    try {
      $this->db->like('Nombre', $letter, 'after');
      if ($num == 0 && $offset == 0) {
        $query = $this->db->get('anuncios');
      } else
      {
        $query = $this->db->get('anuncios', $num, $offset);
      }
      return $query;
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get_images ($artists)
  {
    try {
      $imgs = array();
      foreach ($artists->result() as $row)
      {
        $this->db->select('Nombre');
        $this->db->from('obras');
        $this->db->where('Id_anuncio', $row->Id);
        $this->db->where('Prioridad', '1');
        $this->db->order_by('Id', 'DESC');
        $this->db->limit(1,0);
        $query = $this->db->get();
        foreach  ( $query->result_array() as $row => $value) {
          array_push ($imgs,$value);
        }
        $query->free_result();
      }
      return $imgs;
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get_artists_by_value($value, $num, $offset)
  {
    try {
      $this->db->like('Nombre', $value);
      $this->db->or_like('Descripcion', $value);
      $this->db->or_like('Mail', $value);
      if ($num == 0 && $offset == 0) {
        $query = $this->db->get('anuncios');
      } else
      {
        $query = $this->db->get('anuncios', $num, $offset);
      } 
      return $query;
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get_artists_by_id ($id) 
  {
    try {
      $query = $this->db->get_where('anuncios',array('Id'=>$id));
      return $query->row_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get_obras($anuncio)
  {
    try {
      $query = $this->db->get_where('obras',array('Id_anuncio'=>$anuncio));
      return $query->result();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}