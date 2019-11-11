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

  <img src="/view/Images/backgroundMonCompte.jpg" alt="Background">

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


    <div class="Contacter">
      <p>Telephone : 0000000</p>
      <p>Mail : sfijsfioj@hotmail.fr</p>
    </div>
    <div class="Map">
      <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2710.207049454749!2d-1.5729033!3d47.2125309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805ec0fcda6c4cb%3A0xd620ca38dafa1e9a!2s2+Rue+La+Motte+Picquet%2C+44100+Nantes!5e0!3m2!1sfr!2sfr!4v1423244007186" width="600" height="450" frameborder="0"></iframe>

    </div>

    <div class="Acces">
      <p>Bus</p>
      <p>Tram</p>
    </div>
  </body>
</html>
