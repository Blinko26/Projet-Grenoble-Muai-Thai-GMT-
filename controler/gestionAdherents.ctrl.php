<?php 


require_once('../model/Utilisateur.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/DAO.class.php');


$dao = new DAO();

if(isset($_POST['nom'])){
    $utilisateurName = $dao->getUtilisateurByName();    
}else if(isset($_POST['prenom'])){
    $utilisateurPrenom = $dao->getUtilisateurByPrenom();
}else if(isset($_POST['sexe'])){
    
}else if(isset($_POST['dateNaissance'])){
    $utilisateurdateNaissance = $dao->getUtilisateurBydateNaissance();
}else if(isset($_POST['poids'])){
    $utilisateurPoids = $dao->getUtilisateurByPoids();
}else if(isset($_POST['taille'])){
    $utilisateurTaille = $dao->getUtilisateurByTaille();
}else if(isset($_POST['paiement'])){
    $utilisateurPaiement = $dao->getUtilisateurByPaiement();
}else if(isset($_POST['certificatMedical'])){
    $utilisateurCertif = $dao->getUtilisateurByCertificat();
}else if(isset($_POST['autorisationParentale'])){
    $utilisateurAutorisationParentale = $dao->getUtilisateurByAutorisationParentale();
}else if(isset($_POST['numero'])){
    $utilisateurNum = $dao->getUtilisateurByNum();
}












include '../view/Admin/adherents.view.php';




?>