<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

if(isset($_POST['supprimer'])){
  $DAO->supprimerCom($_POST['com']);
}

$commentaires=$DAO->getAllComsByArticle();
$article=$DAO->getArticleById($commentaires[0]->getNumArticle());
include '../view/gestionComs.view.php';

?>
