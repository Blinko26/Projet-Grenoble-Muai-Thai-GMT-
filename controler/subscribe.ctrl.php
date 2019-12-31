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
  $DAO->inscrireResponsableLegal($DAO->getNumDernierAdherent(),$_POST['nomResp1'],$_POST['prenomResp1'],$_POST['telephoneResp1']);
  if(isset($_POST['nomResp2']) && isset($_POST['prenomResp2'])){
    if(!isset($_POST['telephoneResp2'])){
      $tel='A remplir';
    }else{
      $tel=$_POST['telephoneResp2'];
    }
    $DAO->inscrireResponsableLegal($DAO->getNumDernierAdherent(),$_POST['nomResp2'],$_POST['prenomResp2'],$_POST['telephoneResp2']);
  }
}
include "../view/subscribe.view.php";
?>
