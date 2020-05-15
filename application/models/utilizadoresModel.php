<?php
class utilizadoresModel extends CI_Model {

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
    $result = $this->db->get_where('utilizadores', array('ID_User' => $id));
    return $result->result();
  }

  function post($data){
		$this->db->insert('utilizadores', $data);
  }

  function put($id, $data){
    $this->db->where('ID_User', $id);
    $this->db->update('utilizadores', $data);
  }

  function delete($id){
    $this->db->delete('utilizadores', array('ID_User' => $id));
  }
}
?>
