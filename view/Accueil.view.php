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

   <a  href="Accueil.view.php">Accueil</a>
   <a href="Professeur.view.php">Enseignant</a>
   <a href="Informations.view.php">Informations</a>
   <a href="Contact.view.php">Contact</a>
   <a href="MonCompte.view.php">MonCompte</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  <img src="/view/Images/backgroundAccueil.jpg" alt="Background">

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

  <div class="sectionSlide" style="max-width:500px">
      <img class="mySlides" src="../view/Images/images1.jpeg" alt="" style="width:50%">
      <img class="mySlides" src="../view/Images/images2.jpg" alt="" style="width:50%">
      </div>
      <!--Script d'animation images -->
  <script>
  var myIndex = 0;
  carousel();
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2500);
  }
  </script>
</body>
</html>
