<?php


require_once('Adherent.class.php');
require_once('DAO.class.php');

$adherent = new DAO();

/* CA MARCHE

$allByName = $adherent->getUtilisateurByName();
print("ByName");
var_dump($allByName);

$allByNum = $adherent->getUtilisateurByNum();
print("ByNum");
var_dump($allByNum);


$allByPrenom = $adherent->getUtilisateurByPrenom();
print("ByPrenom");
var_dump($allByPrenom); 

$allBydateNaissance = $adherent->getUtilisateurBydateNaissance();
print("ByNaissance");
var_dump($allBydateNaissance); 

$allByPoids = $adherent->getUtilisateurByPoids();
print("ByPoids");
var_dump($allByPoids);

$allByTaille = $adherent->getUtilisateurByTaille();
print("ByTaille");
var_dump($allByTaille);

$allByPaiement = $adherent->getUtilisateurByPaiement();
print("ByPaiement");
var_dump($allByPaiement); 
RAJOUTER POUR SEULEMENT TRUE OR FALSE ?

$allByCertif = $adherent->getUtilisateurByCertificat();
print("ByCertif");
var_dump($allByCertif);*/

$allByAutorisation = $adherent->getUtilisateurByAutorisationParentale();
print("ByAutorisation");
var_dump($allByAutorisation);

?>