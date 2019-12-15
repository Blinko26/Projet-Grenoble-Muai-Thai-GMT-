<?php 


require_once('../model/Utilisateur.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');


$dao = new DAO();
$utilisateur = $dao->getUtilisateyrByName();
if(isset($_POST['nom'])){
    foreach ($utilisateur as $value) {
        $nom=$utilisateur->getNom();
    }
}else{
    $nom = "bite";
}






?>