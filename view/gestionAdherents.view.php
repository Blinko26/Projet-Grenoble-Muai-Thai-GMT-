<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <div class="Adherents">
   <section id = "Adherents"></section>
 <br>
 <br>
    <h1>Gestion des adherents</h1>
    <?php if(!isset($_POST['validerAdherentAModifier'])){
    if(!isset($_POST['supprimerAdherent']) && !isset($_POST['modifierAdherent'])){?>
      <form action="../controler/gestionAdherents.ctrl.php#Adherents" method ="post">
      <input type="submit" name ="supprimerAdherent" value="Supprimer un adhérent">
      <input type="submit" name ="modifierAdherent" value="Modifier un adhérent">
      <br>
      <h2>Trier par : </h2>

      <table>
        <!--Menu de recherche des adherents en fonction de differents criteres -->
        <tr>
            <th><input type="submit" name ="nom" value="Nom"> <label for=""></label></th>
            <th><input type="submit" name ="prenom" value="Prenom"> <label for=""></label></th>
            <th><input type="submit" name ="sexe" value="Sexe"> <label for=""></label></th>
            <th><input type="submit" name ="dateNaissance" value="Date de naissance"> <label for=""></label></th>
            <th><input type="submit" name ="poids" value="Poids"> <label for=""></label></th>
            <th><input type="submit" name ="taille" value="Taille"> <label for=""></label></th>
            <th><input type="submit" name ="paiement" value="Paiement"> <label for=""></label></th>
            <th><input type="submit" name ="certificatMedical" value="Certificat medical"> <label for=""></label></th>
            <th>Téléphone</th>
        </tr>
      <?php }  else {?>
        <?php if(isset($_POST['supprimerAdherent'])){?>
        <script>
        function confirmer(){
          return confirm("Êtes-vous sur de vouloir supprimer ces adhérents ?");
        }
        </script>
      <?php } ?>
        <form action="../controler/gestionAdherents.ctrl.php#Adherents" method ="post" onsubmit="return confirmer();">
          <?php if(isset($_POST['supprimerAdherent'])){?>
        <h2>Cochez les adhérents à supprimer : </h2>
      <?php } else{?>
        <h2>Cochez l'adhérent à modifier</h2>
      <?php } ?>
        <table>
          <tr>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Sexe</th>
              <th>Date de naissance</th>
              <th>Poids</th>
              <th>Taille</th>
              <th>Paiement</th>
              <th>Certificat medical</th>
              <th>Téléphone</th>
          </tr>
    <?php }?>
    <?php //Affichage des adherents en fonctions des criteres de selections demandes
            foreach ($utilisateur as $value) { ?>
            <tr>
                <td> <?php echo $value->getNom(); echo '  '; ?></td>
                <td> <?php echo $value->getPrenom(); echo '  '; ?></td>
                <td> <?php echo $value->getSexe() ?></td>
                <td> <?php echo $value->getDateNaissance(); echo '  '; ?></td>
                <td> <?php echo $value->getPoids(); echo '  '; ?></td>
                <td> <?php echo $value->getTaille(); echo '  '; ?></td>
                <td> <?php if($value->getPaiement()=='true'){ echo 'effectué';}else{echo 'non effectué';}; echo '  '; ?></td>
                <td> <?php if($value->getCertifMedical()=='true'){ echo 'donné';}else{echo 'non donné';}; ?></td>
                <td> <?php echo $value->getTelephone(); echo ' ';?></td>
                <?php if(isset($_POST['supprimerAdherent'])){?>
                <td><input type="checkbox" id=<?php echo $value->getNumAdherent()?> name =<?php echo $value->getNumAdherent()?>></td>
                <?php } ?>
                <?php if(isset($_POST['modifierAdherent'])){?>
                <td><input type="radio" id=<?php echo $value->getNumAdherent()?> name =adherentAModifier value=<?php echo $value->getNumAdherent()?> checked></td>
                <?php } ?>
            </tr>
          <?php } ?>
    </table>
    <?php if(isset($_POST['supprimerAdherent'])){?>
        <input type="submit" name ="validerSuppression" value="Valider">
        <br>
        <input type="reset" value="Décocher tout">
    <?php }else if(isset($_POST['modifierAdherent'])){?>
        <input type="submit" name ="validerAdherentAModifier" value="Valider">
    <?php }?>
    </div>
  </form>
  <?php if(isset($_POST['supprimerAdherent']) || isset($_POST['modifierAdherent'])){?>
  <form action="../controler/gestionAdherents.ctrl.php#Adherents" method ="post">
    <input type="submit" name ="annuler" value="Annuler">
  </form>
  <?php }
} else {?>
  <script>
  function confirmer(){
    return confirm("Êtes-vous sur de vos modifications sur cet adhérent ?");
  }
  </script>
  <h2>Modification de l'adhérent</h2>
  <form action="../controler/gestionAdherents.ctrl.php#Adherents" method="post" onsubmit="return confirmer()">
      <p>
      Nom :
      <br>
      <input type="text" name="nom" value=<?php echo $adherentAModifier[0]->getNom() ?> required maxlength="50"/>
      <br>
      Prenom :
      <br>
      <input type="text" name="prenom" value=<?php echo $adherentAModifier[0]->getPrenom() ?> required maxlength="50"/>
      <br>
      Sexe:
      <br>
      <?php if($adherentAModifier[0]->getSexe()=='h'){ ?>
        h
        <input type="radio" name="sexe" value="h" checked required/>
        f
        <input type="radio" name="sexe" value="f" required/>
      <?php } else { ?>
        h
        <input type="radio" name="sexe" value="h" required/>
        f
        <input type="radio" name="sexe" value="f" checked required/>
      <?php } ?>
      <br>
      Date de naissance :
      <br>
      <input type="date" name="date_naissance" value=<?php echo $adherentAModifier[0]->getDateNaissance() ?> required />
      <br>
      Téléphone:
      <br>
      <input type="tel" name="telephone" value=<?php echo $adherentAModifier[0]->getTelephone()?> required pattern="0[0-9]{9}"/>
      <br>
      Poids:
      <br>
      <input type="number" name="poids" value=<?php echo $adherentAModifier[0]->getPoids()?> required value="65" min="20" max="200"/>
      <br>
      Taille:
      <br>
      <input type="number" name="taille" value=<?php echo $adherentAModifier[0]->getTaille()?> required value="170" min="100" max="250"/>
      <br>
      Paiement:
      <br>
      <?php if($adherentAModifier[0]->getPaiement()=='true'){ ?>
        effectué
        <input type="radio" name="paiement" value="true" checked required/>
        non effectué
        <input type="radio" name="paiement" value="false" required/>
      <?php } else { ?>
        effectué
        <input type="radio" name="paiement" value="true" required/>
        non effectué
        <input type="radio" name="paiement" value="false" checked required/>
      <?php } ?>
      <br>
      Certificat médical:
      <br>
      <?php if($adherentAModifier[0]->getCertifMedical()=='true'){ ?>
        donné
        <input type="radio" name="certificatMedical" value="true" checked required/>
        non donné
        <input type="radio" name="certificatMedical" value="false" required/>
      <?php } else { ?>
        donné
        <input type="radio" name="certificatMedical" value="true" required/>
        non donné
        <input type="radio" name="certificatMedical" value="false" checked required/>
      <?php } ?>
      <input type="hidden" name='numAdh' value='<?php echo $adherentAModifier[0]->getNumAdherent()?>'/>
      <br>
        <input type="submit" name='validerModification' value="Valider" />
      </p>
    </form>
    <form action="../controler/gestionAdherents.ctrl.php#Adherents" method="post">
    <input type="submit" value="Annuler" />
    </form>
<?php }
   include '../view/footer.view.php'?>
</body>
</html>
