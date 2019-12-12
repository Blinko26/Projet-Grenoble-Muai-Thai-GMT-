<?php
if(!isset($_POST['identifiant'])){
  $mdp=0;
}else{
  if($_POST['identifiant']=="hello" && $_POST['mot_de_passe']=="world"){
    $mdp=1;
  } else{
    $mdp=-1;
  }
}
include "../view/monCompte.view.php"
?>
