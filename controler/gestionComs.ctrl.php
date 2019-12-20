<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

if(isset($_POST['supprimer'])){
  $DAO->supprimerCom($_POST['supprimer']);
}
$commentaires=$DAO->getAllComsByArticle($_POST['commentaires']);
$article=$DAO->getArticleById($_POST['commentaires']);
include '../view/gestionComs.view.php';

?>
