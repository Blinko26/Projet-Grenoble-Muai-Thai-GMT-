<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

if(isset($_POST['supprimer'])){
  $DAO->supprimerCom($_POST['supprimer']);
}

if(isset($_POST['validerComsAConsulter'])){
  $commentaires=$DAO->getAllComsByArticle($_POST['comsAConsulter']);
  $article=$DAO->getArticleById($_POST['comsAConsulter']);
}
include '../view/gestionComs.view.php';

?>
