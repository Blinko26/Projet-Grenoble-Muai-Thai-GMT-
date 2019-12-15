<?php
class Adherent {
  public $numAdherent;
  public $nom;
  public $prenom;
  public $dateNaissance;
  public $poids;
  public $taille;
  public $paiement;
  public $certifMedical;

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
    return $this->taille;
  }
  
  function getPaiement() : string{
    return $this->paiement;
  }
  
  function getCertifMedical() : string{
    return $this->certifMedical;
  }
}


?>
