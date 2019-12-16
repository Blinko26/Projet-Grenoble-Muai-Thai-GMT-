<?php include '../view/Admin/headerAdmin.view.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">

  </header>

<?php if(!(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['poids']) && isset($_POST['taille']) && isset($_POST['telephone']) && isset($_POST['date_naissance']))){ ?>
    <h2>Inscription : </h2>
  <form action="../controler/subscribe.ctrl.php" method="post">
      <p>
      Nom :
      <br>
      <input type="string" name="nom" required/>
      <br>
      Prenom :
      <br>
      <input type="string" name="prenom" required/>
      <br>
      Sexe(homme|femme):
      <br>
      <input type="string" name="sexe" required/>
      <br>
      Date de naissance(jj/mm/aaaa):
      <br>   
      <input type=date step=7 min=2014-09-08> 
      <br>
      <input type="string" name="date_naissance" required/>
      <br>
      Poids:
      <br>
      <input type="string" name="poids" required/>
      <br>
      Taille:
      <br>
      <input type="string" name="taille" required/>
      <br>
      Téléphone:
      <br>
      <input type="string" name="telephone" required/>
      <br>

      <input type="submit" value="Valider" />
      </p>
  </form>
<?php }else{?>
  <p> <?php echo $DAO->getUtilisateurNom($_POST['nom'])->getPrenom() ?> <?php echo $DAO->getUtilisateurNom($_POST['nom'])->getNom() ?> a été inscrit</p>
<?php } ?>

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
