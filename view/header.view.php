<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../framework/header.css">
</head>
<body>

<header>

<div class="topnav" id="myTopnav">

   <a  href="../view/accueil.view.php">Accueil</a>
   <a href="../view/professeur.view.php">Enseignant</a>
   <a href="../view/informations.view.php">Informations</a>
   <a href="../view/inscription.view.php">Inscription</a>
   <a href="../controler/monCompte.ctrl.php">Connexion</a>
   <a href="../view/contact.view.php">Contact</a>


  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
</script>

</html>
