<?php
class Actualite {
  public $numAct;
  public $titre;
  public $dateActu;
  public $contenuActu;
}

function getNumAct() : int{
  return $this->numAct;
}

function getTitre() : string{
  return $this->titre;
}

function getDateActu() : string{
  return $this->dateActu;
}

function getContenuActu() : string{
  return $this->contenuActu;
}
?>
