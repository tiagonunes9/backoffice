<?php
class perfilModel extends CI_Model {

  function getAll()
  {
    $result=$this->db->query('SELECT * FROM utilizadores');
		
		return $result->result();
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('utilizadores');
    return $result->result(); // commit || mysql_query(sql);
  }

  function get($id)
  {
    $result = $this->db->get_where('utilizadores', array('id_user' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('id_user', $id);
    $this->db->update('utilizadores', $data);
  }
}
?>