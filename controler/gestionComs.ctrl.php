<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

$commentaires=$DAO->getAllComsByArticle($_POST['comsAConsulter']); // On récupère tous les commentaires d'un article donné.
$nbSupp=0;
foreach ($commentaires as $value) {
  $num=$value->getNumCom();
  if(isset($_POST[$num]) && $_POST[$num]=="on"){
    $DAO->supprimerCom($num-$nbSupp);
    $nbSupp++;
  }
}

if(isset($_POST['supprimer'])){
  $DAO->supprimerCom($_POST['supprimer']);
}

$commentaires=$DAO->getAllComsByArticle($_POST['comsAConsulter']);
$article=$DAO->getArticleById($_POST['comsAConsulter']);
include '../view/gestionComs.view.php';

?>
