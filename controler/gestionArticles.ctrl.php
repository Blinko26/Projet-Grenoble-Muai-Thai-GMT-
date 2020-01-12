<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

$articles=$DAO->getAllArticles(); // On récupère tous les articles dans la base de données.
$role=$DAO->getUtilisateurByLogin($_SESSION['identifiant'])->getRole(); // On récupère le rôle de l'utilisateur connecté.

if($role=="admin" && isset($_POST["validerSupprimerArticle"])){
  $nbSupp=0;
  foreach ($articles as $value) { // On parcourt la liste des adhérents.
    $num=$value->getId(); // On récupère le numéro d'adhérent de l'adhérent courant.
    if(isset($_POST[$num]) && $_POST[$num]=="on"){
      echo $num;
      $DAO->supprimerArticle($num-$nbSupp);
      $nbSupp++;
    }
  }
}

$articles=$DAO->getAllArticles(); // On récupère tous les articles dans la base de données.

if($role=="admin" && isset($_POST["validerModifierArticle"])){

}

include '../view/gestionArticles.view.php';

?>
