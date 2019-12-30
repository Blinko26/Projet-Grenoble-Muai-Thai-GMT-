<?php
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

if(isset($_POST['validerInscription']) && (int)((time()-strtotime($_POST['date_naissance']))/3600/24/365)>=18){
  $DAO->inscrire($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_naissance'],$_POST['poids'],$_POST['taille'],$_POST['telephone']);
}
include "../view/subscribe.view.php";
?>
