<?php


class UsersModel extends CI_Model {

  function isValidLogin($UsernameAdmin, $PasswordAdmin)
  {
    $result = $this->db->get_where('administradores', array('UsernameAdmin' => $UsernameAdmin, 'PasswordAdmin' => $PasswordAdmin));
    return $result->result();
  }
}
?>
