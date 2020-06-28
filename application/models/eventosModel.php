<?php
class eventosModel extends CI_Model {

  function getAll()
  {
    $this->db->select(); // select *
    $result = $this->db->get('eventos'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }

  function post($data){
		$this->db->insert('eventos', $data);
  }

  function delete($id, $data){
    $this->db->where('id_evento', $id);
    $this->db->update('eventos', $data);
  }

  function get($id)
  {
    $result = $this->db->get_where('eventos', array('id_evento' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('id_evento', $id);
    $this->db->update('eventos', $data);
  }

}
?>
