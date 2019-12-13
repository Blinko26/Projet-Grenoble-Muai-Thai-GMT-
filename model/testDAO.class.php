<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

$DAO = new DAO();
$adherent=$DAO->get($_POST['identifiant']);
var_dump($adherent);
?>
