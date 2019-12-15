<?php include '../view/Admin/headerAdmin.view.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">



  </header>
    <?php if($mdp!=1){ ?>
    <h2>Connexion :</h2>
    <form action="../controler/monCompte.ctrl.php" method="post">
        <p>
        Identifiant :
        <br>
        <input type="string" name="identifiant" />
        <br>
        Mot de passe :
        <br>
        <input type="password" name="mot_de_passe"/>
        <br>
        <input type="submit" value="Valider" />
        </p>
    </form>
    <?php if($mdp==-1){ ?>
      <br>
      <p>Identifiant inconnu, si vous n'êtes pas encore inscrit cliquez sur le bouton ci-dessous. </p>
    <?php } else if($mdp==-2){?>
      <br>
      <p>Mot de passe incorrect, vérifiez votre identifiant et votre mot de passe.</p>
    <?php }?>
    <br>
    <form action="../view/subscribe.view.php">
      <input type="submit" value="Pas encore inscrit" />
    </form>
    <?php } else {?>

    <h2>Mon compte :</h2>
    <p><?php echo $utilisateur->getLogin()?></p>
    <br>
    <p><?php echo $utilisateur->getMail()?></p>
    <br>
    <form action="../view/accueil.view.php">
      <input type="submit" value="Déconnexion" />
      <?php #session_unset(); ?>
    </form>
    <?php } ?>
    <?php include '../view/footer.view.php' ?>
  </body>
</html>