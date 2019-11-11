<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="/view/css/main.css">
</head>
<body>
<header>

<div class="topnav" id="myTopnav">

   <a class='active' href="Accueil.view.php">Accueil</a>
   <a href="Professeur.view.php">Enseignant</a>
   <a href="Informations.view.php">Informations</a>
   <a href="Contact.view.php">Contact</a>
   <a href="MonCompte.view.php">MonCompte</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  <img src="/view/Images/backgroundInformation.jpg" alt="Background">

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

</header>


    <div class="certificat medical">
      <img src="../view/Images/certificatMedical.jpg" alt="image d'un certificat medical">
      <p>Certificats Medical</p>
    </div>
    <div class="Feuille d'inscription">
      <img src="" alt="Image montrant une feuille d'inscription remplie">
      <p>Feuille d'inscription REMPLIE</p>
    </div>
    <div class="Cheque">
      <img src="" alt="image d'un cheque remplis au nom de l'association">
      <p>Cheque de 235 euros au nom de l'association</p>
    </div>
    <button type="button" name="button"><a href="FicheInscription.html">Fiche d'Inscription</a></button>
<p>-------------------------------------------------------</p>

    <div class="EmploiDuTemps">
      <p>Emploi du Temps</p>
      <img src="" alt="image montrant les horaires conernant les cours de muay thai">
    </div>

  </body>
</html>
