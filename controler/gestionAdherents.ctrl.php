
<?php


require_once('../model/Utilisateur.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/ResponsableLegal.class.php');
require_once('../model/DAO.class.php');
session_start(); // Démarre une nouvelle connexion.
$dao = new DAO();

$utilisateur=$dao->getAdherents(); // La variable utilisateur récupère tous les adhérents inscrits dans la base de données.
$nbSupp=0;
foreach ($utilisateur as $value) { // On parcourt la liste des adhérents.
  $num=$value->getNumAdherent(); // On récupère le numéro d'adhérent de l'adhérent courant.
  if(isset($_POST[$num]) && $_POST[$num]=="on"){
    $dao->supprimerAdherent($num-$nbSupp);
    $nbSupp++;
  }
}

if(isset($_POST['validerAdherentAModifier'])){
  $adherentAModifier=$dao->getAdherentByNum($_POST['adherentAModifier']);
}

if(isset($_POST['validerAdherentAConsulter'])){
  $adherentAConsulter=$dao->getAdherentByNum($_POST['adherentAConsulter']);
  $utilisateurAConsulter=$dao->getUtilisateurByAdherent($adherentAConsulter[0]->getNumAdherent());
  $age= (int)((time()-strtotime($adherentAConsulter[0]->getDateNaissance()))/3600/24/365);
  if($age<18){
    $responsablesLegauxAConsulter=$dao->getResponsablesLegauxByEnfant($adherentAConsulter[0]->getNumAdherent());
    $nbRespLeg=$responsablesLegauxAConsulter[0]->getNumResponsableLegal();
  }
}

if(isset($_POST['modifierRespLegaux'])){
  $adherentAConsulterModifRespLeg=$dao->getAdherentByNum($_POST['adherentAConsulterModifRespLeg']);
  $responsablesLegauxAConsulter=$dao->getResponsablesLegauxByEnfant($adherentAConsulterModifRespLeg[0]->getNumAdherent());
}

if(isset($_POST['validerModification'])){
  $dao->modifierAdherent($_POST['numAdh'],$_POST['nom'],$_POST['prenom'],$_POST['sexe'],$_POST['date_naissance'],$_POST['poids'],$_POST['taille'],$_POST['telephone'],$_POST['paiement'],$_POST['certificatMedical']);
}

if(isset($_POST['validerModificationRespLeg'])){
  $dao->modifierResponsableLegal($_POST['numResp1'],$_POST['nomResp1'],$_POST['prenomResp1'],$_POST['telephoneResp1']);
  $dao->modifierResponsableLegal($_POST['numResp2'],$_POST['nomResp2'],$_POST['prenomResp2'],$_POST['telephoneResp2']);
}

if(isset($_POST['prenom'])){ // Dans le tableau regroupant tous les adhérents, si l'on clique sur la colonne "prénom", les adhérents seront triés par ordre alphabétique selon leur prénom.
    $utilisateur = $dao->getAdherentOrderByPrenom();
}else if(isset($_POST['sexe'])){ // Si l'on clique sur la colonne "sexe", les adhérents seront regroupés selon leur sexe (homme/femme).
    $utilisateur = $dao->getAdherentOrderBySexe();
}else if(isset($_POST['dateNaissance'])){ // Si l'on clique sur la colonne "date de naissance", les adhérents seront triés par ordre croissant selon leur date de naissance.
    $utilisateur = $dao->getAdherentOrderBydateNaissance();
}else if(isset($_POST['poids'])){ // Si l'on clique sur la colonne "poids", les adhérents seront triés par ordre croissant selon leur poids.
    $utilisateur = $dao->getAdherentOrderByPoids();
}else if(isset($_POST['taille'])){ // Si l'on clique sur la colonne "taille", les adhérents seront triés par ordre croissant selon leur taille.
    $utilisateur = $dao->getAdherentOrderByTaille();
}else if(isset($_POST['paiement'])){  // Si l'on clique sur la colonne "paiement", les adhérents seront regroupés selon la validité de leur paiement (oui/non).
    $utilisateur = $dao->getAdherentOrderByPaiement();
}else if(isset($_POST['certificatMedical'])){ // Si l'on clique sur la colonne "certificat médical", les adhérents seront regroupés selon la validité du rendu leur certificat médical (oui/non).
    $utilisateur = $dao->getAdherentOrderByCertificat();
}else{
  $utilisateur = $dao->getAdherentOrderByName(); // Par défaut, le tableau sera trié par ordre croissant selon le nom des adhérents.
}


include '../view/gestionAdherents.view.php';



?>
