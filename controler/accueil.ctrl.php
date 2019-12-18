<?php
require_once('../model/Actualite.class.php');
require_once('../model/DAO.class.php');


$DAO = new DAO();
$articles=$DAO->getAllArticles();

include '../view/accueil.view.php' ?>
