<?php
class DAO {
  private $db;
  function __construct(){
    $this->db = new PDO('sqlite:../BDD/projet.db');
  }

  function get(string $id):Utilisateur{
    $m="SELECT * FROM Utilisateur WHERE login='$id';";
    $sth=$this->db->query($m);
    $resultat=$sth->fetchAll(PDO::FETCH_CLASS,"Utilisateur");
    return $resultat[0];
  }
}
?>
