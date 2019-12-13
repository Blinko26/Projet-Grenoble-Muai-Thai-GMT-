<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

$DAO = new DAO();
$logins=$DAO->getAllAdherents();
if(!isset($_POST['identifiant'])){
  $mdp=0;
}else{
  foreach ($logins as $value) {
    if($value->getLogin()==$_POST['identifiant']){
      $utilisateur=$DAO->get($_POST['identifiant']);
    }
  }
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
