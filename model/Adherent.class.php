<?php
class Adherent {
  public $numUtilisateur;
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
    return $this->numUtilisateur;
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

  function getSexe() : string{
    return $this->sexe;
  }
}
?>
