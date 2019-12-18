<?php
class Commentaire {
  public $numCom;
  public $numUtilisateur;
  public $numArticle;
  public $numComSuivant;
  public $nomUtilisateur;
  public $dateCom;
  public $contenuCom;
}

function getNumAdh() : int{
  return $this->numUtilisateur;
}

function getNumCom() : int{
  return $this->numCom;
}

function getNomAdh() : string{
  return $this->nomUtilisateur;
}

function getNumComSuivant() : int{
  return $this->numComSuivant;
}

function getNumArticle() : string{
  return $this->numArticle;
}

function getDateCom() : string{
  return $this->dateCom;
}

function getContenuCom() : string{
  return $this->$contenuCom;
}
?>
