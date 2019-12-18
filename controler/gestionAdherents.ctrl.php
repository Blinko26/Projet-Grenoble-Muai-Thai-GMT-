
<?php


require_once('../model/Utilisateur.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');
session_start();

$dao = new DAO();

if(isset($_POST['nom'])){
    $utilisateur = $dao->getUtilisateurByName();
}else if(isset($_POST['prenom'])){
    $utilisateur = $dao->getUtilisateurByPrenom();
}else if(isset($_POST['sexe'])){
    $utilisateur = $dao->getUtilisateurBySexe();
}else if(isset($_POST['dateNaissance'])){
    $utilisateur = $dao->getUtilisateurBydateNaissance();
}else if(isset($_POST['poids'])){
    $utilisateur = $dao->getUtilisateurByPoids();
}else if(isset($_POST['taille'])){
    $utilisateur = $dao->getUtilisateurByTaille();
}else if(isset($_POST['paiement'])){
    $utilisateur = $dao->getUtilisateurByPaiement();
}else if(isset($_POST['certificatMedical'])){
    $utilisateur = $dao->getUtilisateurByCertificat();
}else if(isset($_POST['autorisationParentale'])){
    $utilisateur = $dao->getUtilisateurByAutorisationParentale();
}else if(isset($_POST['numero'])){
    $utilisateur = $dao->getUtilisateurByNum();
}else{
  $utilisateur = $dao->getUtilisateurByName();
}

include '../view/gestionAdherents.view.php';

?>
