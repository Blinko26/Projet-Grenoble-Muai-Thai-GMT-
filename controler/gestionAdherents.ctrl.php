
<?php


require_once('../model/Utilisateur.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/ResponsableLegal.class.php');
require_once('../model/DAO.class.php');
session_start();
$dao = new DAO();

$utilisateur=$dao->getAdherents();
$nbSupp=0;
foreach ($utilisateur as $value) {
  $num=$value->getNumAdherent();
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
