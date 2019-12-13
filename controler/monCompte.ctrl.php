<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

$DAO = new DAO();
if(!isset($_POST['identifiant'])){
  $mdp=0;
}else{
  $adherent=$DAO->get($_POST['identifiant']);
  if($_POST['identifiant']=="star" && $_POST['mot_de_passe']=="platinum"){
    $mdp=1;
  } else{
    $mdp=-1;
  }
}
include "../view/monCompte.view.php"
?>
