<?php
require_once('../model/Adherent.class.php');

class DAO {
  private $db;
  function __construct(){
    $this->db = new PDO('sqlite:../BDD/projet.db');
  }

  function getAllAdherents(): Array {
    $m="SELECT login FROM User ;";
    $sth=$this->db->query($m);
    $resultat=$sth->fetchAll(PDO::FETCH_CLASS,"Utilisateur");
    return $resultat;
  }

  function get(string $id):Utilisateur{
    $m="SELECT * FROM User WHERE login='$id';";
    $sth=$this->db->query($m);
    $resultat=$sth->fetchAll(PDO::FETCH_CLASS,"Utilisateur");
    return $resultat[0];
  }


  /////////////////////////////////////////////////////////////////////
  //Fonction donnant lieu a une requete dans la BD en fonction de certain criteres (noms,prenoms...)
  //Afin de pouvoir mettre en place l'affichage des adherents en fonctions de ces meme criteres.
  //Pages concernees : Adherent.class.php, Utilisateur.class.php,  adherents.view.php, gestionAdherents.ctrl.php
  /////////////////////////////////////////////////////////////////////
  function getUtilisateurByName(string $nom = 'null'):array{
    if($nom == 'null'){
      //Requete sur la base de donnees afin de recuperer les infos personnelles des adherents et les triers.
      $requete = "SELECT * FROM informationsPersonelles ORDER BY nom";
    }else{
      $requete = "SELECT * FROM informationsPersonelles where nom = $nom";
    }
    //Retourne un (statement) Objet
    $sth = $this->db->query($requete);
    //Retourne une array de lignes
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByNum(int $num = 0):array{
    if($num == 0){
      $requete = "SELECT * FROM informationsPersonelles ORDER BY numUtilisateur";
    }else{
      $requete = "SELECT * FROM informationsPersonelles where numUtilisateur = $num";
    }
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByPrenom(string $prenom = 'null'):array{
    if($prenom == 'null'){
      $requete = "SELECT * FROM informationsPersonelles ORDER BY prenom";
    }else{
      $requete = "SELECT * FROM informationsPersonelles where prenom = $prenom";
    }
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurBydateNaissance(string $dateNaissance = 'null'):array{
    if($dateNaissance == 'null'){
      $requete = "SELECT * FROM informationsPersonelles ORDER BY dateNaissance";
    }else{
      $requete = "SELECT * FROM informationsPersonelles where dateNaissance = $dateNaissance";
    }
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByPoids(int $poids = 0):array{
    if($poids == 0){
      $requete = "SELECT * FROM informationsPersonelles ORDER BY poids";
    }else{
      $requete = "SELECT * FROM informationsPersonelles where poids = $poids";
    }
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByTaille(int $taille = 0):array{
    if($taille == 0){
      $requete = "SELECT * FROM informationsPersonelles ORDER BY taille";
    }else{
      $requete = "SELECT * FROM informationsPersonelles where taille = $taille";
    }
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByPaiement():array{
    $requete = "SELECT * FROM informationsPersonelles ORDER BY paiement";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByCertificat():array{
    $requete = "SELECT * FROM informationsPersonelles ORDER BY certifMedical";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByAutorisationParentale():array{
    $requete = "SELECT * FROM informationsPersonelles where dateNaissance - datetime('now') >= 18";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurBySexe():array{
    $requete = "SELECT * FROM informationsPersonelles ORDER BY sexe";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }
///////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////
  //Normalement on en a plus besoin car valeur par defaut dans les fonctions du dessus exemple string nom = 'null'
  function getUtilisateurNom(string $nom):Adherent{
    $requete = "SELECT * FROM informationsPersonelles where nom='$nom';";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat[0];
  }

  function inscrire(string $nom, string $prenom, string $sexe, string $date_naissance, string $poids, string $taille, string $telephone): void {
    $requete = "SELECT * FROM informationsPersonelles WHERE numUtilisateur IN (SELECT MAX(numUtilisateur) FROM informationsPersonelles)";
    $rep = $this->db->query($requete);
    $resultat = $rep->fetchAll(PDO::FETCH_CLASS,"Adherent");
    $maxAdh=$resultat[0];
    $m="INSERT INTO informationsPersonelles(numUtilisateur,nom,prenom,sexe,dateNaissance,poids,taille,paiement,certifMedical,telephone) VALUES(:numUtilisateur,:nom,:prenom,:sexe,:dateNaissance,:poids,:taille,:paiement,:certifMedical,:telephone)";
    $sth=$this->db->prepare($m);
    $sth->execute([
      ':numUtilisateur' => $maxAdh->getNumAdherent()+1,
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':sexe' => $sexe,
      ':dateNaissance' => $date_naissance,
      ':poids' => $poids,
      ':taille' => $taille,
      ':paiement' => 'true',
      ':certifMedical' => 'true',
      ':telephone' => $telephone,
    ]);
  }

}
?>
