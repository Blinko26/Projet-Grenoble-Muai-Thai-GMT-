
<?php


require_once('../model/Utilisateur.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');
session_start();
var_dump($_POST);
$dao = new DAO();

if(isset($_POST['supprimer'])){
    $dao->supprimerAdherent($_POST['supprimer']);
}

if(isset($_POST['nom'])){
    $utilisateur = $dao->getAdherentByName();
}else if(isset($_POST['prenom'])){
    $utilisateur = $dao->getAdherentByPrenom();
}else if(isset($_POST['sexe'])){
    $utilisateur = $dao->getAdherentBySexe();
}else if(isset($_POST['dateNaissance'])){
    $utilisateur = $dao->getAdherentBydateNaissance();
}else if(isset($_POST['poids'])){
    $utilisateur = $dao->getAdherentByPoids();
}else if(isset($_POST['taille'])){
    $utilisateur = $dao->getAdherentByTaille();
}else if(isset($_POST['paiement'])){
    $utilisateur = $dao->getAdherentByPaiement();
}else if(isset($_POST['certificatMedical'])){
    $utilisateur = $dao->getAdherentByCertificat();
}else if(isset($_POST['autorisationParentale'])){
    $utilisateur = $dao->getAdherentByAutorisationParentale();
}else if(isset($_POST['numero'])){
    $utilisateur = $dao->getAdherentByNum();
}else if(isset($_POST['telephone'])){
    $utilisateur = $dao->getAdherentByTelephone();

}else{
  $utilisateur = $dao->getAdherentByName();
}


include '../view/gestionAdherents.view.php';



?>
