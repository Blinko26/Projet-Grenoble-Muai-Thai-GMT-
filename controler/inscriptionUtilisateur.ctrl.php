<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');

$DAO = new DAO();
$logins=$DAO->getAllAdherents();

if(isset($_POST['validerInscriptionUtilisateur'])){
  if($_POST['mot_de_passe']==$_POST['confirmerMot_de_passe']){
    $inscription_confirme=2;
    foreach ($logins as $value) {
      if($value->getLogin()==$_POST["identifiant"]){
        $inscription_confirme=1;
      }
    }
    if($inscription_confirme!=1){
      $DAO->inscrireUtilisateur($_POST['identifiant'],$_POST['mail'],$_POST['mot_de_passe']);
    }
  } else{
    $inscription_confirme=0;
  }
}
if(isset($inscription_confirme) && $inscription_confirme==2){
  $logins=$DAO->getAllAdherents();
  foreach ($logins as $value) {
    if($value->getLogin()==$_POST["identifiant"]){
      $utilisateur=$DAO->get($_POST["identifiant"]);
    }
  }
}
include "../view/inscriptionUtilisateur.view.php";
?>
