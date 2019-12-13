<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

$DAO = new DAO();
if(!isset($_POST['identifiant'])){
  $mdp=0;
}else{
  $utilisateur=$DAO->get($_POST['identifiant']);
  if(!isset($utilisateur)){
    $mdp=-1;
  } else{
    if($_POST['mot_de_passe']==$utilisateur->getPassword()){
      $mdp=1;
    } else{
      $mdp=-2;
    }
  }
}
include "../view/monCompte.view.php"
?>
