<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');


$DAO = new DAO();

if(!isset($_SESSION['identifiant'])){
  $connexion=0;
}else {
  switch ($DAO->get($_SESSION['identifiant'])->getRole()){
    case 'admin':
    $connexion=4;
    break;
    case 'moderateur':
    $connexion=3;
    break;
    case 'adherent':
    $connexion=2;
    break;
    default:
    $connexion=1;
    break;
  }
}

include '../view/header.view.php' ?>
