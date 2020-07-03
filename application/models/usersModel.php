<?php


class UsersModel extends CI_Model {

  function isValidLogin($email, $password)
  {
    $result = $this->db->get_where('utilizadores', array('email' => $email, 'password' => $password));
    return $result->result();
  }

  public function getDados($email){
      $this->db->select('*');
      $this->db->from('utilizadores');
       $this->db->where('email', $email);

       $query = $this->db->get();
       $row = $query->row_array();
       return $row;
  }
  
}
