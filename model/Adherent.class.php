<?php
class Adherent {
  public $numAdherent;
  public $nom;
  public $prenom;
  public $sexe;
  public $dateNaissance;
  public $poids;
  public $taille;
  public $paiement;
  public $certifMedical;
  public $telephone;

  function getNumAdherent() : int{
    return $this->numAdherent;
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
    return $this->login;
  }

  function getPaiement() : boolean{
    return $this->paiement;
  }

  function getCertifMedical() : boolean{
    return $this->certifMedical;
  }
}
?>
