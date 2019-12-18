<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

session_start();
$DAO = new DAO();

if(!isset($_SESSION)){
  $connexion=0;
}else {
  if($DAO->get($_SESSION['identifiant'])->getRole()=='admin'){
    $connexion=2;
  }else{
    $connexion=1;
  }
}
include '../view/header.view.php' ?>
