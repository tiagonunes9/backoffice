<?php
class turmasModel extends CI_Model {

  function getAll()
  {    
    $result=$this->db->query('SELECT * FROM turma, professores
    WHERE turma.ID_Professor = professores.ID_Professor');
		
		return $result->result();
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('turma'); // from admin
    return $result->result(); 
  }

  function post($data){
		$this->db->insert('turma', $data);
  }

  function delete($id){
    $this->db->delete('turma', array('ID_Turma' => $id));
  }

  function get($id)
  {
    $result = $this->db->get_where('turma', array('ID_Turma' => $id));
    return $result->result();
  }

  function put($id, $data){
    $this->db->where('ID_Turma', $id);
    $this->db->update('turma', $data);
  }

  function getbanklist() {
    $this->db->select('ID_Professor', 'NomeProfessor');
    $this->db->from('professores');
    $query = $this->db->get();
    return $query;

  }

function listar_professores() {
  $this->db->select('ID_professor, NomeProfessor');
  $this->db->from('professores');
  $query = $this->db->get();
  return $query;
}



  
}
?>
