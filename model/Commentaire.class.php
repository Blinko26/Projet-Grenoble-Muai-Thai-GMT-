<?php
class Commentaire {
  public $numAdh;
  public $numCom;
  public $nomAdh;
  public $dateCom;
  public $contenuCom;
}

function getNumAdh() : int{
  return $this->numAdh;
}

function getNumCom() : int{
  return $this->numCom;
}

function getNomAdh() : string{
  return $this->nomAdh;
}

function getDateCom() : string{
  return $this->dateCom;
}

function getContenuActu() : string{
  return $this->contenuActu;
}
?>
