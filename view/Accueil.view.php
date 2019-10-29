<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Accueil</h1>
    <img src="" alt="Image de fond du club">
    <ul>
        <li> <a href="Accueil.view.php">Accueil</a></li>
        <li> <a href="Professeur.view.php">Enseignant</a></li>
        <li> <a href="Informations.view.php">Informations</a></li>
        <li> <a href="Contact.view.php">Contact</a></li>
        <li> <a href="MonCompte.view.php">MonCompte</a></li>
    </ul>

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
