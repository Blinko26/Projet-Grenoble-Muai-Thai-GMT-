<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

$articles=$DAO->getAllArticles(); // On récupère tous les articles dans la base de données.
$role=$DAO->getUtilisateurByLogin($_SESSION['identifiant'])->getRole(); // On récupère le rôle de l'utilisateur connecté.

include '../view/gestionArticles.view.php';

?>
