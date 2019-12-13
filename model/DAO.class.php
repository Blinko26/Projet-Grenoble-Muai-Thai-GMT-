<?php
class DAO {
  private $db;
  function __construct($path){
    $this->db = new PDO('sqlite:../BDD/projet.db');
  }

  function get(int $id):Music{
    $m="SELECT * FROM Adherent;
    $sth=$this->db->query($m);
    $resultat=$sth->fetchAll(PDO::FETCH_CLASS,"Adherent");
    return $resultat[0];
  }
}
?>
