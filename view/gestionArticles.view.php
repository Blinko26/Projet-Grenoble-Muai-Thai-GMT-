<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <br>
 <br>
    <h1>Gestion des adherents</h1>
 <!--Menu de recherche des adherents en fonction de differents criteres -->
        <table>
          <tr>
              <th> Id </td>
              <th> Titre </td>
              <th> DatePubli</td>
              <th> DateEdit </td>
          </tr>
    <?php
    //Affichage des adherents en fonctions des criteres de selections demandes
            foreach ($articles as $value) { ?>
            <tr>
                <td> <?php echo $value->getId(); echo '  '; ?></td>
                <td> <?php echo $value->getTitre(); echo '  '; ?></td>
                <td> <?php echo $value->getDatePubli() ?></td>
                <td> <?php echo $value->getDateEdit(); echo '  '; ?></td>
            </tr>
          <?php } ?>
    </table>
    <?php include '../view/footer.view.php'?>
</body>
</html>
