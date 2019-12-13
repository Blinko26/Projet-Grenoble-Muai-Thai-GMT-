<?php include '../view/header.view.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">

  </header>

  <h2>Inscription : </h2>
  <form action="../controler/monCompte.ctrl.php" method="post">
      <p>
      Identifiant :
      <input type="string" name="identifiant" />
      <br>
      Mot de passe :
      <input type="password" name="mot_de_passe"/>
      <br>
      Confirmation mot de passe :
      <input type="password" name="conf_mot_de_passe"/>
      <br>
      <input type="submit" value="Valider" />
      </p>
  </form>
  <br>
  <form action="../controler/monCompte.ctrl.php">
    <input type="submit" value="Déjà inscrit" />
  </form>

  <?php include '../view/footer.view.php' ?>
</body>
</html>

<a href="javascript:void(0)" class="dropbtn">Informations</a>
<div class="dropdown-content">
  <a href="../view/informations.view.php#HistoireDuSport">Histoire</a>
  <a href="../view/informations.view.php#DescriptionClub">Club</a>
  <a href="../view/informations.view.php#Horaires">Horaires</a>
  <a href="../view/informations.view.php#Localisation">Localisation</a>
</div>
