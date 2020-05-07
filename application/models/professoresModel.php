<?php
class professoresModel extends CI_Model {

  function getAll()
  {
    $result=$this->db->query('SELECT * FROM professores');
		
		return $result->result();
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('professores');
    return $result->result(); // commit || mysql_query(sql);
  }

  function get($id)
  {
    $result = $this->db->get_where('professores', array('ID_Professor' => $id));
    return $result->result();
  }

  function post($data){
		$this->db->insert('professores', $data);
  }

  function put($id, $data){
    $this->db->where('ID_Professor', $id);
    $this->db->update('professores', $data);
  }

  function delete($id){
    $this->db->delete('professores', array('ID_Professor' => $id));
  }
}
?>
