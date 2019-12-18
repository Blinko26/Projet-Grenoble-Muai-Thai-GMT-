<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

session_start();
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
      $_SESSION["identifiant"]=$_POST['identifiant'];
      $_SESSION["mot_de_passe"]=$_POST['mot_de_passe'];
      $mdp=1;
    } else{
      $mdp=-2;
    }
  }
}
if(isset($_SESSION["identifiant"])){
  $mdp=1;
  foreach ($logins as $value) {
    if($value->getLogin()==$_SESSION["identifiant"]){
      $utilisateur=$DAO->get($_SESSION["identifiant"]);
    }
  }
}

function deconnect() : void {
  session_unset();
}

include "../view/monCompte.view.php";
?>
