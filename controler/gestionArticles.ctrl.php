<?php


require_once('../model/Actualite.class.php');
require_once('../model/DAO.class.php');
session_start();

$DAO = new DAO();

$articles=$DAO->getAllArticles();

include '../view/gestionArticles.view.php';

?>
