<?php
class suporteModel extends CI_Model {

  function getAll()
  {
    $result=$this->db->query('SELECT * FROM suporte');
		
		return $result->result();
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('suporte');
    return $result->result(); // commit || mysql_query(sql);
  }

  function get($id)
  {
    $result = $this->db->get_where('suporte', array('id_suporte' => $id));
    return $result->result();
  }

  function post($data){
		$this->db->insert('suporte', $data);
  }

  function put($id, $data){
    $this->db->where('id_suporte', $id);
    $this->db->update('suporte', $data);
  }

  function delete($id){
    $this->db->delete('suporte', array('id_suporte' => $id));
  }
}
?>
