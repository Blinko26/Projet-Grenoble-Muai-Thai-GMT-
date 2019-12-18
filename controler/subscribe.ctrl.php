<?php
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['poids']) && isset($_POST['taille']) && isset($_POST['telephone']) && isset($_POST['date_naissance'])){
  $DAO->inscrire($_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_naissance'],$_POST['poids'],$_POST['taille'],$_POST['telephone']);
}
include "../view/subscribe.view.php";
?>
