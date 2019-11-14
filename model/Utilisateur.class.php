<?php
class Utilisateur {
  public $numUtilisateur;
  public $login;
  public $password;
  public $mail;
}

function getNumUtilisateur() : int{
  return $this->numUtilisateur;
}

function getLogin() : string{
  return $this->login;
}

function getPassword() : string{
  return $this->password;
}

function getMail() : string{
  return $this->mail;
}
?>
