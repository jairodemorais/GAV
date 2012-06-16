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

	public function get_artists_by_value($value, $num, $offset){
	  try {
      $this->db->where('Nombre =', $value);
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
}