<?php
require_once('../model/Utilisateur.class.php');
require_once('../model/DAO.class.php');
require_once('../model/Adherent.class.php');
require_once('../model/ResponsableLegal.class.php');

session_start(); // L'utilisateur est connecté.
if(isset($_POST['deconnect'])){
  if($_POST['deconnect']=='Déconnexion'){
    session_unset(); // Si l'utilisateur clique sur le bouton deconnexion, la session se ferme.
  }
}

$DAO = new DAO();

$logins=$DAO->getAllAdherents(); // On récupère la liste de tous les adhérents.
if(!isset($_POST['identifiant'])){ // Si l'utilisateur n'a pas entré d'identifiant, alors mdp = 0.
  $mdp=0; // La valeur mdp sert à définir le message retourné.
}else{
  foreach ($logins as $value) { // On parcourt la liste de tous les adhérents.
    if($value->getLogin()==$_POST['identifiant']){ // Si le login d'un utilisateur enregistré dans la BDD correspond à ce qui a été entré, alors on récupère les informations de cet utilisateur.
      $utilisateur=$DAO->get($_POST['identifiant']);
    }
  }
  if(!isset($utilisateur)){
    $mdp=-1;
  } else{
    if($_POST['mot_de_passe']==$utilisateur->getPassword()){ // Si le mot de passe entré correspond au mot de passe de l'utilisateur trouvé précédemment, alors les informations de la session correspondent aux informations entrées.
      $_SESSION["identifiant"]=$_POST['identifiant'];
      $_SESSION["mot_de_passe"]=$_POST['mot_de_passe'];
      $mdp=1;
    } else{
      $mdp=-2;
    }
  }
}


if(isset($_SESSION["identifiant"])){
  $mdp=1;
  foreach ($logins as $value) {
    if($value->getLogin()==$_SESSION["identifiant"]){
      $utilisateur=$DAO->get($_SESSION["identifiant"]);
    }
  }if(isset($utilisateur)){
    if ($utilisateur->getRole()!='inscrit') { // Si l'utilisateur n'a pas le rôle inscrit, alors on récupère ses informations d'adhérent.
      $adherent=$DAO->getAdherentByUtilisateur($utilisateur->getNumUtilisateur());
      $age= (int)((time()-strtotime($adherent->getDateNaissance()))/3600/24/365);
      if($age<18){ // Si l'adhérent a moins de 18 ans, on récupère les informations de son/ses responsables légaux.
        $nbRespLeg=1;
        $responsablesLegaux=$DAO->getResponsablesLegauxByEnfant($adherent->getNumAdherent());
      }
    }
  }
}
include "../view/monCompte.view.php";
?>
