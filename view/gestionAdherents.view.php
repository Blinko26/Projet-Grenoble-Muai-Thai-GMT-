<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <div class="Adherents">
   <section id = "Adherents"></section>
 <br>
 <br>
    <h1>Gestion des adherents</h1>
    <?php if(!isset($_POST['supprimerAdherent'])){?>
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
        <script>
        function confirmer(){
          return confirm("Êtes-vous sur de vouloir supprimer ces adhérents ?");
        }
        </script>
        <form action="../controler/gestionAdherents.ctrl.php#Adherents" method ="post" onsubmit="return confirmer();">
        <h2>Cochez les adhérents à supprimer : </h2>
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
            </tr>
          <?php } ?>
    </table>
    <?php if(isset($_POST['supprimerAdherent'])){?>
        <input type="submit" name ="validerSuppression" value="Valider">
        <br>
        <br>
        <input type="reset" value="Décocher tout">
    <?php }?>
    </div>
  </form>
  <?php if(isset($_POST['supprimerAdherent'])){?>
  <form action="../controler/gestionAdherents.ctrl.php#Adherents" method ="post">
    <input type="submit" name ="annulerSuppression" value="Annuler">
  </form>
  <?php }
   include '../view/footer.view.php'?>
</body>
</html>
