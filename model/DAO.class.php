<?php
class DAO {
  private $db;
  function __construct(){
    $this->db = new PDO('sqlite:../BDD/projet.db');
  }

  function getAllAdherents(): Array {
    $m="SELECT login FROM Utilisateur ;";
    $sth=$this->db->query($m);
    $resultat=$sth->fetchAll(PDO::FETCH_CLASS,"Utilisateur");
    return $resultat;
  }
  function get(string $id):Utilisateur{
    $m="SELECT * FROM Utilisateur WHERE login='$id';";
    $sth=$this->db->query($m);
    $resultat=$sth->fetchAll(PDO::FETCH_CLASS,"Utilisateur");
    return $resultat[0];
  }


  /////////////////////////////////////////////////////////////////////
  //Fonction donnant lieu a une requete dans la BD en fonction de certain criteres (noms,prenoms...)
  //Afin de pouvoir mettre en place l'affichage des adherents en fonctions de ces meme criteres.
  //Pages concernees : Adherent.class.php, Utilisateur.class.php,  adherents.view.php, gestionAdherents.ctrl.php
  /////////////////////////////////////////////////////////////////////
  function getUtilisateurByName():array{
    //Requete sur la base de donnees afin de recuperer les infos personnelles des adherents et les triers.
    $requete = "SELECT * FROM infoPerso ORDER BY nom";
    //Retourne un (statement) Objet
    $sth = $this->db->query($requete);
    //Retourne une array de lignes 
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByNum():array{
    $requete = "SELECT * FROM infoPerso ORDER BY numUtilisateur";
    $sth = $this->db->query($requete);
    
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByPrenom():array{
    $requete = "SELECT * FROM infoPerso ORDER BY prenom";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }


  function getUtilisateurBydateNaissance():array{
    $requete = "SELECT * FROM infoPerso ORDER BY dateNaissance";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }



  function getUtilisateurByPoids():array{
    $requete = "SELECT * FROM infoPerso ORDER BY poids";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByTaille():array{
    $requete = "SELECT * FROM infoPerso ORDER BY taille";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByPaiement():array{
    $requete = "SELECT * FROM infoPerso ORDER BY paiement";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByCertificat():array{
    $requete = "SELECT * FROM infoPerso ORDER BY certifMedical";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

  function getUtilisateurByAutorisationParentale():array{
    $requete = "SELECT * FROM infoPerso where dateNaissance - datetime('now') >= 18";
    $sth = $this->db->query($requete);
    $resultat = $sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat;
  }

}
?>
