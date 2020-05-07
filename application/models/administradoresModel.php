<?php
class administradoresModel extends CI_Model {

  function getAll()
  {    
    $this->db->select(); // select *
    $result = $this->db->get('administradores'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('administradores'); // from admin
    return $result->result(); 
  }

  function post($data){
		$this->db->insert('administradores', $data);
  }

  function delete($id){
    $this->db->delete('administradores', array('id_admin' => $id));
  }

  function get($id)
  {
    $result = $this->db->get_where('administradores', array('id_admin' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('id_admin', $id);
    $this->db->update('administradores', $data);
  }
}
?>
