<?php
class Adherent {
  public $numAdh;
  public $nom;
  public $prenom;
  public $sexe;
  public $dateNaissance;
  public $poids;
  public $taille;
  public $paiement;
  public $certifMedical;
  public $telephone;
  public $statutInscription;

 

  function getNumAdherent() : int{
    return $this->numAdh;
  }

  function getNom() : string{
    return $this->nom;
  }

  function getPrenom() : string{
    return $this->prenom;
  }

  function getDateNaissance() : string{
    return $this->dateNaissance;
  }

  function getPoids() : int{
    return $this->poids;
  }

  function getTaille() : int{
    return $this->taille;
  }

  function getPaiement() : bool{
    return $this->paiement;
  }

  function getCertifMedical() : bool{
    return $this->certifMedical;
  }

  function getSexe() : string{
    return $this->sexe;

  }

  function getTelephone() : string {
    return $this->telephone;
  }
}
?>
