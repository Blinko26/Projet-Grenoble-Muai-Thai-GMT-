<?php include '../controler/header.ctrl.php' ?>
  <link rel="stylesheet" href="../framework/monCompte.css">

  <img src="../view/Images/backgroundMonCompte.jpg" alt="Background" class="imgBackground">



  </header>
    <?php if($mdp!=1){ ?>
    <h2>Connexion :</h2>
    <form action="../controler/monCompte.ctrl.php" method="post">
        <p>
        Identifiant :
        <br>
        <input type="string" name="identifiant" required/>
        <br>
        Mot de passe :
        <br>
        <input type="password" name="mot_de_passe" required/>
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
    <form action="../controler/inscriptionUtilisateur.ctrl.php">
      <input type="submit" value="Pas encore inscrit sur le site" />
    </form>
    <?php } else {?>

    <h2>Mon compte :</h2>
    <p>Votre identifiant : <?php echo $utilisateur->getLogin()?></p>
    <br>
    <p>Votre mail : <?php echo $utilisateur->getMail()?></p>
    <br>
    <p>Votre rôle : <?php echo $utilisateur->getRole()?></p>
    <br>
    <?php if( $utilisateur->getRole() != 'inscrit'){
      ?>
      <h2>Informations Personnelles :</h2>
      <p>Votre nom : <?php echo $adherent->getPrenom() ?></p>
      <p>Votre prénom : <?php echo $adherent->getNom() ?></p>
      <p>Votre date de naissance : <?php echo $adherent->getDateNaissance() ?></p>
      <p>Votre poids : <?php echo $adherent->getPoids() ?></p>
      <p>Votre taille : <?php echo $adherent->getTaille() ?></p>
      <p>Etat de votre paiement :
      <?php if($adherent->getPaiement()){
        echo "Votre paiement a été remis. ";
      }
      else {
        echo "Votre paiement n'a pas été remis. ";
      } ?>
      </p>
      <p>Votre certificat médical :
      <?php if($adherent->getCertifMedical()){
        echo "Votre certificat médical a été remis. ";
      }
      else {
        echo "Votre certificat n'a pas été remis. ";
      } ?>
      </p>
      <p>Votre sexe :
        <?php if($adherent->getSexe()=='h'){
        echo "Homme";
      }
      else {
        echo "Femme";
      } ?></p>
  <?php  if($age<18){?>
    <h2>Informations sur vos responsables légaux :</h2>
      <?php foreach ($responsablesLegaux as $value) {?>
            <p>Nom de votre responsable legal <?php echo $nbRespLeg?> : <?php echo $value->getNom()?></p>
            <p>Prénom de votre responsable legal <?php echo $nbRespLeg?> : <?php echo $value->getPrenom()?></p>
            <p>Téléphone de votre responsable legal <?php echo $nbRespLeg?> : <?php echo $value->getTelephone()?></p>
      <?php $nbRespLeg++;} ?>
    <?php } ?>
    <?php } ?>




    <form action="../controler/monCompte.ctrl.php" method="post">
      <input type="submit" name="deconnect"value="Déconnexion"/>
    </form>

    <?php }
    include '../view/footer.view.php' ?>
  </body>
</html>
