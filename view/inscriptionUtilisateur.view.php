<?php include '../controler/header.ctrl.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">

  </header>
    <h2>Inscription : </h2>
    <script>
    function confirmer(){
      return confirm("Êtes-vous sur de vouloir continuer l'inscripton ?");
    }
    </script>
    <?php if(!isset($inscription_confirme)){?>
  <form class="inscription" action="../controler/inscriptionUtilisateur.ctrl.php" method="post" onsubmit="return confirmer()">
      <p>
      Login :
      <br>
      <input type="text" name="identifiant" required maxlength="25"/>
      <br>
      Mail :
      <br>
      <input type="mail" name="mail" required maxlength="50"/>
      <br>
      Mot de passe :
      <br>
      <input type="password" name="mot_de_passe" required maxlength="50"/>
      <br>
      Confirmez votre mot de passe :
      <br>
      <input type="password" name="confirmerMot_de_passe" required maxlength="50"/>
      <br>
      <input class="bouton" type="submit" name="validerInscriptionUtilisateur" value="Valider" />
      <input class="bouton" type="reset" value="Réinitialiser le formulaire" />
      </p>
  </form>
<?php }else if($inscription_confirme==0){?>
  <form action="../controler/inscriptionUtilisateur.ctrl.php" method="post" onsubmit="return confirmer()">
      <input type="hidden" name="identifiant" value="<?php echo $_POST['identifiant'];?>" >
      <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>" >
      <p>
      Reconfirmez votre mot de passe
      <br>
      <br>
      Mot de passe :
      <br>
      <input type="password" name="mot_de_passe" required maxlength="50"/>
      <br>
      Confirmez votre mot de passe :
      <br>
      <input type="password" name="confirmerMot_de_passe" required maxlength="50"/>
      <br>
      <input type="submit" name="validerInscriptionUtilisateur" value="Valider" />
      <input type="reset" value="Réinitialiser le formulaire" />
      </p>
  </form>
<?php } else if($inscription_confirme==1){?>
  <form action="../controler/inscriptionUtilisateur.ctrl.php" method="post" onsubmit="return confirmer()">
      <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>" >
      <input type="hidden" name="mot_de_passe" value="<?php echo $_POST['mot_de_passe'];?>" >
      <input type="hidden" name="confirmerMot_de_passe" value="<?php echo $_POST['confirmerMot_de_passe'];?>" >
      <p>
      Le login <?php echo $_POST['identifiant'] ; ?> est déjà pris, veuillez en choisir un autre
      <br>
      <br>
      Login :
      <br>
      <input type="text" name="identifiant" required maxlength="25"/>
      <br>
      <input class="bouton" type="submit" name="validerInscriptionUtilisateur" value="Valider" />
      <input class="bouton" type="reset" value="Réinitialiser le formulaire" />
      </p>
  </form>
<?php } else {?>
  <p>Vous avez été inscrit, pour fusionner ce compte avec un autre rendez vous sur la page de votre compte.
    <form action="../controler/monCompte.ctrl.php" method="post">
        <input type="hidden" name="identifiant" value="<?php echo $utilisateur->getLogin(); ?>" >
        <input type="hidden" name="mot_de_passe" value="<?php echo $utilisateur->getPassword(); ?>" >
        <input type="submit" name="accesCompte" value="Acceder à mon compte" />
        </p>
    </form>
<?php } ?>
  <?php include '../view/footer.view.php' ?>
</body>
</html>
