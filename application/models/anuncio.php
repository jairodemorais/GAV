<?php
class Anuncio extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function get_artists($num, $offset)
  {
    try {
      $this->db->select('anuncios.Nombre as Nombre, anuncios.Id as Id, anuncios.Mail as Mail, obras.Nombre as Imagen');
      $this->db->join('obras', 'anuncios.Id = obras.Id_anuncio');
      $this->db->group_by("anuncios.Nombre"); 
      $this->db->order_by("anuncios.Nombre", "ASC"); 
      if ($num == 0 && $offset == 0) {
        $query = $this->db->get('anuncios');
      } else {
        $query = $this->db->get('anuncios', $num, $offset);
      }
      return $query;
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get_artists_by_letter($letter,$num, $offset)
  {
    try {
      $this->db->select('anuncios.Nombre as Nombre, anuncios.Id as Id, anuncios.Mail as Mail, obras.Nombre as Imagen');
      $this->db->join('obras', 'anuncios.Id = obras.Id_anuncio');
      $this->db->like('anuncios.Nombre', $letter, 'after');
      $this->db->group_by("anuncios.Nombre"); 
      $this->db->order_by("anuncios.Nombre", "ASC"); 
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

  public function get_artists_by_value($value, $num, $offset)
  {
    
  $this->db->select('anuncios.Nombre as Nombre, anuncios.Id as Id, anuncios.Mail as Mail, obras.Nombre as Imagen');
    $this->db->join('obras', 'anuncios.Id = obras.Id_anuncio');
    $this->db->like('anuncios.Nombre', $value);
    $this->db->or_like('anuncios.Descripcion', $value);
    $this->db->or_like('anuncios.Mail', $value);
    $this->db->group_by("anuncios.Nombre"); 
    $this->db->order_by("anuncios.Nombre", "ASC"); 
    try {

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
  
  public function get_artists_by_category($categoryId, $num, $offset)
  {
    try {
        $this->db->select('anuncios.Nombre as Nombre, anuncios.Id as Id, anuncios.Mail as Mail, obras.Nombre as Imagen');
        $this->db->join('obras', 'anuncios.Id = obras.Id_anuncio');
    $this->db->group_by("anuncios.Nombre"); 
    $this->db->order_by("anuncios.Nombre", "ASC"); 
      if ($num == 0 && $offset == 0) {
      $query = $this->db->get_where('anuncios',array('anuncios.Id_categoria'=>$categoryId));
      } else
      {
      $query = $this->db->get_where('anuncios',array('anuncios.Id_categoria'=>$categoryId), $num, $offset);
      }

        return $query;
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }

  public function get_artists_by_id ($id) 
  {
  
  try {
  
      $this->db->select('anuncios.Nombre as Nombre, anuncios.Id as Id, anuncios.Mail as Mail, anuncios.Descripcion as Descripcion, anuncios.Video as Video, anuncios.Web as Web, anuncios.Direccion as Direccion, anuncios.Telefono as Telefono, obras.Nombre as Imagen');
      $this->db->join('obras', 'anuncios.Id = obras.Id_anuncio');
    $this->db->group_by("anuncios.Nombre"); 
    $this->db->order_by("anuncios.Nombre", "ASC"); 
      $query = $this->db->get_where('anuncios',array('anuncios.Id'=>$id));
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

  public function get_obras_id($id)
  {
    try {
      $query = $this->db->get_where('obras',array('Id'=>$id));
      return $query->result();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
  
}