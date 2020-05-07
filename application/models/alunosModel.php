<?php
class alunosModel extends CI_Model {

  function getAll()
  {
    $result=$this->db->query('SELECT alunos.ID_Aluno, alunos.ID_User, alunos.NomeAluno, alunos.NumeroEscolar, alunos.ContactoAluno, alunos.MoradaAluno, alunos.ID_Encarregado,
    alunos.ID_Turma, alunos.password, encarregados.ID_Encarregado, encarregados.NomeEncarregado, turma.Ano, turma.LetraTurma, turma.ID_Turma
    FROM alunos, encarregados,turma
    WHERE  alunos.ID_Encarregado= encarregados.ID_Encarregado AND alunos.ID_Turma = turma.ID_Turma');
		
		return $result->result();
  }

  function getFirst()
  {
    $this->db->select(); // select *
    $result = $this->db->get('alunos');
    return $result->result(); // commit || mysql_query(sql);
  }

  function get($id)
  {
    $result = $this->db->get_where('alunos', array('ID_Aluno' => $id));
    return $result->result();
  }

  function post($data){
		$this->db->insert('alunos', $data);
  }

  function put($id, $data){
    $this->db->where('ID_Aluno', $id);
    $this->db->update('alunos', $data);
  }

  function delete($id){
    $this->db->delete('alunos', array('ID_Aluno' => $id));
  }
}
?>
