<?php
class Actualite {
  public $id;
  public $titre;
  public $date_time_publication;
  public $date_time_edition;
  public $contenu;

  function getId() : int{
    return $this->id;
  }

  function getTitre() : string{
    return $this->titre;
  }

  function getDatePubli() : string{
    return $this->date_time_publication;
  }

  function getDateEdit() : string{
    return $this->date_time_edition;
  }

  function getContenuActu() : string{
    return $this->contenuActu;
  }
}
?>
