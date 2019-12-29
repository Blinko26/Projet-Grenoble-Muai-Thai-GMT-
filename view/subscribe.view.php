<?php include '../controler/header.ctrl.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">

  </header>

<?php if(!(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['poids']) && isset($_POST['taille']) && isset($_POST['telephone']) && isset($_POST['date_naissance']))){ ?>
    <h2>Inscription : </h2>
    <script>
    function confirmer(){
      return confirm("Êtes-vous sur de vouloir inscrire cet adhérent ?");
    }
    </script>
  <form action="../controler/subscribe.ctrl.php" method="post" onsubmit="return confirmer()">
      <p>
      Nom :
      <br>
      <input type="text" name="nom" required maxlength="50"/>
      <br>
      Prenom :
      <br>
      <input type="text" name="prenom" required maxlength="50"/>
      <br>
      Sexe:
      <br>
      h
      <input type="radio" name="sexe" value="h" required/>
      f
      <input type="radio" name="sexe" value="f" required/>
      <br>
      Date de naissance :
      <br>
      <input type="date" name="date_naissance" required />
      <br>
      Téléphone:
      <br>
      <input type="tel" name="telephone" required pattern="0[0-9]{9}"/>
      <br>
      Poids:
      <br>
      <input type="number" name="poids" required value="65" min="20" max="200"/>
      <br>
      Taille:
      <br>
      <input type="number" name="taille" required value="170" min="100" max="250"/>
      <br>
      <input type="submit" value="Valider" />
      </p>
  </form>
<?php }else{?>
  <p> <?php echo $DAO->getUtilisateurNom($_POST['nom'])->getPrenom() ?> <?php echo $DAO->getUtilisateurNom($_POST['nom'])->getNom() ?> a été inscrit</p>
  <form action="../controler/subscribe.ctrl.php" method="post">
    <input type="submit" value="Continuer les inscriptions" />
  </form>
<?php } ?>
  <?php include '../view/footer.view.php' ?>
</body>
</html>
