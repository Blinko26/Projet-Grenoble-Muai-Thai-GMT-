<?php
class ResponsableLegal {
  public $numRespLegal;
  public $nom;
  public $prenom;
  public $telephone;
  public $numEnfant;

  function getNumResponsableLegal() : int{
    return $this->numRespLegal;
  }

  function getNom() : string{
    return $this->nom;
  }

  function getPrenom() : string{
    return $this->prenom;
  }

  function getTelephone() : string {
    return $this->telephone;
  }

  function getNumEnfant() : int{
    return $this->numEnfant;
  }
}
?>
