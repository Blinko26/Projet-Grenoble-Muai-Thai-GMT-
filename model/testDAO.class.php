<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

$DAO = new DAO();
$adherent=$DAO->get('star');
var_dump($adherent);
$password=$adherent->getPassword();
var_dump($password);
?>
