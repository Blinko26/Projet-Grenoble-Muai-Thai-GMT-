<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <br>
 <br>
    <h1>Gestion des adherents</h1>
 <!--Menu de recherche des adherents en fonction de differents criteres -->
    <form action="../controler/gestionAdherents.ctrl.php" method ="post">
    <div class = "criteres">
    <table>


            <tr>
                <th>Trier par : </label></th>
                <th><input type="submit" name ="nom" value="Nom"> <label for=""></label></th>
                <th><input type="submit" name ="prenom" value="Prenom"> <label for=""></label></th>
                <th><input type="submit" name ="sexe" value="Sexe"> <label for=""></label></th>
                <th><input type="submit" name ="dateNaissance" value="Date de naissance"> <label for=""></label></th>
                <th><input type="submit" name ="poids" value="Poids"> <label for=""></label></th>
                <th><input type="submit" name ="taille" value="Taille"> <label for=""></label></th>
                <th><input type="submit" name ="paiement" value="Paiement"> <label for=""></label></th>
                <th><input type="submit" name ="certificatMedical" value="Certificat medical"> <label for=""></label></th>
            </tr>
     </table>
    </div>

  </form>
    <br>
    <form>
      <table>
            <tr>
                <th>Nom</label></th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>Poids</th>
                <th>Taille</th>
                <th>Paiment</label></th>
                <th>Certificat médical</th>
                <th> Téléphone</label></th>
            </tr>


    <?php
    //Affichage des adherents en fonctions des criteres de selections demandes
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

            </tr>
          <?php } ?>
    </table>
  </form>
    <?php include '../view/footer.view.php'?>
</body>
</html>
