<?php include '../view/header.view.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">



  </header>
    <h2>Connexion :</h2>
    <form action="../controler/monCompte.ctrl.php" method="post">
        <p>
        Identifiant :
        <input type="string" name="identifiant" />
        <br>
        Mot de passe :
        <input type="password" name="mot_de_passe"/>
        <br>
        <input type="submit" value="Valider" />
        </p>
    </form>
    <?php echo $mdp ?>
    <br>
    <form action="subscribe.view.php">
      <input type="submit" value="Pas encore inscrit" />
    </form>

    <?php include '../view/footer.view.php' ?>
  </body>
</html>
