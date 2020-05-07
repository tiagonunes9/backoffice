<?php
class encarregadosModel extends CI_Model {

  function getAll()
  {
    $result=$this->db->query('SELECT *   FROM encarregados');
		
		return $result->result();
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('encarregados');
    return $result->result(); // commit || mysql_query(sql);
  }

  function get($id)
  {
    $result = $this->db->get_where('encarregados', array('ID_Encarregado' => $id));
    return $result->result();
  }

  function post($data){
		$this->db->insert('encarregados', $data);
  }

  function put($id, $data){
    $this->db->where('ID_Encarregado', $id);
    $this->db->update('encarregados', $data);
  }

  function delete($id){
    $this->db->delete('encarregados', array('ID_Encarregado' => $id));
  }
}
?>
