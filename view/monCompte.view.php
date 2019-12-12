<?php include '../view/header.view.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">



  </header>
    <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :</p>
    <form action="secret.php" method="post">
        <p>
        <input type="password" name="mot_de_passe" />
        <input type="submit" value="Valider" />
        </p>
    </form>
    <ul>
      <li><p>Nom d'Utilisateur :</p> </li>
      <li><p>Mot De Passe</p> </li>
      <div class="boutons">
        <button type="button" name="buttonInscription ">Pas Encore Inscrit</button>
      </div>
    </ul>

    <?php include '../view/footer.view.php' ?>
  </body>
</html>
