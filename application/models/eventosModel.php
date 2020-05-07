<?php
class eventosModel extends CI_Model {

  function getAll()
  {
    $this->db->select(); // select *
    $result = $this->db->get('eventos'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }
  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('eventos'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }

  function post($data){
		$this->db->insert('eventos', $data);
  }

  function delete($id){
    $this->db->delete('eventos', array('ID_Evento' => $id));
  }

  function get($id)
  {
    $result = $this->db->get_where('eventos', array('ID_Evento' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('ID_Evento', $id);
    $this->db->update('eventos', $data);
  }

}
?>
