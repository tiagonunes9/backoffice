<?php
class noticiasModel extends CI_Model {

  function getAll()
  {
    $this->db->select(); // select *
    $result = $this->db->get('noticias'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }
  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('noticias'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }

  function post($data){
		$this->db->insert('noticias', $data);
  }

  function delete($id){
    $this->db->delete('noticias', array('id_noticia' => $id));
  }

  function get($id)
  {
    $result = $this->db->get_where('noticias', array('id_noticia' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('id_noticia', $id);
    $this->db->update('noticias', $data);
  }

}
?>
