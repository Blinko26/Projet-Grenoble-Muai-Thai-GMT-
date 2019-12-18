<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <br>
 <br>
    <h1>Gestion des articles</h1>
 <!--Menu de recherche des adherents en fonction de differents criteres -->
 <form action="../controler/gestionComs.ctrl.php" method ="post">
 <div class = "criteres">
        <table>
          <tr>
              <th> Id </td>
              <th> Titre </td>
              <th> DatePubli</td>
              <th> DateEdit </td>
              <th> Nombre de commmentaires </td>
          </tr>
    <?php
    //Affichage des adherents en fonctions des criteres de selections demandes
            foreach ($articles as $value) { ?>
            <tr>
                <td> <?php echo $value->getId(); ?></td>
                <td> <?php echo $value->getTitre(); ?></td>
                <td> <?php echo $value->getDatePubli() ?></td>
                <td> <?php echo $value->getDateEdit(); ?></td>
                <td> <?php echo $DAO->getNbComsByArticle($value->getId()); ?></td>
                <td> <input type="submit" name ="certificatMedical" value="Accéder aux commentaires"></td>

            </tr>
          <?php } ?>
    </table>
  </div>

  </form>
    <?php include '../view/footer.view.php'?>
</body>
</html>
