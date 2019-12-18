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
                <td><input type="submit" name ="nom" value="Nom"> <label for=""></label></td>
                <td><input type="submit" name ="prenom" value="Prenom"> <label for=""></label></td>
                <td><input type="submit" name ="sexe" value="sexe"> <label for=""></label></td>
                <td><input type="submit" name ="dateNaissance" value="dateNaissance"> <label for=""></label></td>
                <td><input type="submit" name ="poids" value="poids"> <label for=""></label></td>
                <td><input type="submit" name ="taille" value="taille"> <label for=""></label></td>
                <td><input type="submit" name ="paiement" value="paiement"> <label for=""></label></td>
                <td><input type="submit" name ="certificatMedical" value="CertificatMedical"> <label for=""></label></td>
            </tr>
        </table>
    </div>

    </form>
        <table>


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
                <td> <?php echo $value->getPaiement(); echo '  '; ?></td>
                <td> <?php echo $value->getCertifMedical(); ?></td>

            </tr>
          <?php } ?>
    </table>
    <?php include '../view/footer.view.php'?>
</body>
</html>
