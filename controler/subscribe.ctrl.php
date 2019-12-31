<?php
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();
var_dump($_POST);
if(isset($_POST['validerInscription']) && (int)((time()-strtotime($_POST['date_naissance']))/3600/24/365)>=18){
  $DAO->inscrire($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_naissance'],$_POST['poids'],$_POST['taille'],$_POST['telephone'],$_POST['paiement'],$_POST['certificat_medical']);
}
if(isset($_POST['validerInscriptionMineur'])){
  $DAO->inscrire($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_naissance'],$_POST['poids'],$_POST['taille'],$_POST['telephone'],$_POST['paiement'],$_POST['certificat_medical']);
}
include "../view/subscribe.view.php";
?>
