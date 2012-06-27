<?php
class User extends CI_Model {

  public function __construct()
  {
    $this->load->database();
  }
  
  public function validateUser()
  { 
    $this->db->select('Nombre, Mail');
    $this->db->from('usuarios');
    $this->db->where('Mail', addslashes( $_POST['usuario']));
    $this->db->where('Estado', 1);
    $this->db->where('Password', md5(addslashes($_POST['clave'])));
    $query = $this->db->get();
    
    $rowcount = $query->num_rows();
    if ($rowcount == 1) {
      return $query->row();
    } else {
      return null;
    }
  }
  
  public function create()
  {
    $user = $this->get($this->input->post('email'));
    if ($user == null) 
    {
      $data = array(
        'Nombre' => $this->input->post('nombre'), 
        'Apellido' => $this->input->post('apellido'), 
        'Mail' => addslashes($this->input->post('email')), 
        'Password' =>  md5(addslashes($this->input->post('password'))), 
        'Telefono' => $this->input->post('telefono'), 
        'Direccion' => $this->input->post('direccion'), 
        'Ciudad' => $this->input->post('ciudad'), 
        'Provincia' => $this->input->post('provincia'),  
        'CP' => $this->input->post('cp'), 
        'Pais' => $this->input->post('pais'),
        'Permisos'=> $this->input->post('tipo_reg'),
        'Estado' => 2
        );
      return $this->db->insert('usuarios', $data);
    }else {
      return false;
    }
  }
  
  public function enable_user($id)
  {
    try {
      $data = array(
        'Estado' => 1
        );
      $this->db->where('Id', $id);
      $this->db->update('usuarios', $data);

      $query = $this->db->get_where('usuarios',array('Id'=>$id));
      return $query->row_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
  
  public function update()
  {
   $data = array(
      'Nombre' => $this->input->post('nombre'), 
      'Apellido' => $this->input->post('apellido'), 
      'Mail' => addslashes( $this->input->post('email')), 
      'Password' =>  md5(addslashes($this->input->post('password'))), 
      'Telefono' => $this->input->post('telefono'), 
      'Direccion' => $this->input->post('direccion'), 
      'Ciudad' => $this->input->post('ciudad'), 
      'Provincia' => $this->input->post('provincia'),  
      'CP' => $this->input->post('cp'), 
      'Pais' => $this->input->post('pais'),
      'Permisos'=> $this->input->post('tipo_reg')
   );
   $this->db->where('Id', $this->input->post('id'));
   return $this->db->update('usuarios', $data);
  }
  
  public function get($mail)
  {
    try {
      $query = $this->db->get_where('usuarios',array('Mail'=>$mail));
      return $query->row_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
  public function getById($id)
  {
     try {
      $query = $this->db->get_where('usuarios',array('Id'=>$id));
      return $query->row_array();
    } catch (Exception $e) {
      echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
  }
}