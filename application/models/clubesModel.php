<?php
class clubesModel extends CI_Model {

  function getAll()
  {

    $result=$this->db->query('SELECT clubes.NomeClube, clubes.Descricao, professores.NomeProfessor, clubes.Horario, clubes.ID_Clube FROM clubes, professores
    WHERE clubes.ID_Professor = professores.ID_Professor');

		
		return $result->result();

    /*$this->db->select(); // select *
    $result = $this->db->get('clubes'); // from admin
    return $result->result(); // commit || mysql_query(sql);*/
  }
  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('clubes'); // from admin
    return $result->result(); // commit || mysql_query(sql);
  }

  function post($data){
		$this->db->insert('clubes', $data);
  }

  function delete($id){
    $this->db->delete('clubes', array('ID_Clube' => $id));
  }

  function get($id)
  {
    $result = $this->db->get_where('clubes', array('ID_Clube' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('ID_Clube', $id);
    $this->db->update('clubes', $data);
  }

  function getbanklist() {
    $this->db->select('NomeProfessor');
    $this->db->from('professores');
    $query = $this->db->get();
    return $query ->result();
}

public function getdepartment() {
  $query = $this->db->select('ID_Professor')->from('clubes')->get();
  return $query->result();
}
}
?>
