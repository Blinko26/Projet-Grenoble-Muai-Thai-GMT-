<?php
class MessagePrive {
  public $numMessage;
  public $numEnvoyeur;
  public $numReceveur;
  public $objetMessage;
  public $dateMessage;
  public $contenuMessage;
}

function getNumMessage() : int{
  return $this->numMessage;
}

function getNumEnvoyeur() : int{
  return $this->numEnvoyeur;
}

function getNumReceveur() : int{
  return $this->numReceveur;
}

function getObjetMessage() : string{
  return $this->objetMessage;
}

function getDateMessage() : string{
  return $this->dateMessage;
}

function getContenuMessage() : string{
  return $this->contenuMessage;
}
?>
