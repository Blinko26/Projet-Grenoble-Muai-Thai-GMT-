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
<<<<<<< HEAD
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
=======

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


>>>>>>> 376d3a78cd6a64e5fa32fc03c553bbadeed5bbad
?>
