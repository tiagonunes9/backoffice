<?php


class UsersModel extends CI_Model {

  function isValidLogin($email, $password)
  {
    $result = $this->db->get_where('utilizadores', array('email' => $email, 'password' => $password));
    return $result->result();
  }
}
?>
