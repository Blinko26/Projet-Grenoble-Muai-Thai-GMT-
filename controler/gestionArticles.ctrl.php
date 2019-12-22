<?php


require_once('../model/Actualite.class.php');
require_once('../model/Commentaire.class.php');
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

$articles=$DAO->getAllArticles();
$role=$DAO->get($_SESSION['identifiant'])->getRole();

include '../view/gestionArticles.view.php';

?>
