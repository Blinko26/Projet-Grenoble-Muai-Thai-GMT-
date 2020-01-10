<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionArticles.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <br>
 <br>
    <h1>Gestion des articles</h1>
 <!--Menu de recherche des adherents en fonction de differents criteres -->
 <form action="../controler/gestionArticles.ctrl.php" method ="post">
   <?php if($role!='moderateur'){?>
     <input class="bouton" type="submit" name ="supprimerArticle" value="Supprimer un article">
     <input class="bouton" type="submit" name ="modifierArticle" value="Modifier un article">
   <?php } ?>
   <input class="bouton" type="submit" name ="consulterComs" value="Consulter les commentaires">
</form>
<br>
 <form action="../controler/gestionComs.ctrl.php" method ="post">
 <div class = "criteres">
        <table>
          <tr>
              <th> Numéro d'article </td>
              <th> Titre </td>
              <th> Date de publication</td>
              <th> Date de dernière édition </td>
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
                <?php if(isset($_POST['consulterComs'])){?>
                  <?php if($DAO->getNbComsByArticle($value->getId())==0){?>
                  <td> <input type="radio" id=<?php echo $value->getId()?> name="comsAConsulter" value="<?php echo $value->getId()?>" disabled/></td>
                  <?php } else { ?>
                    <td> <input type="radio" id=<?php echo $value->getId()?> name="comsAConsulter" value="<?php echo $value->getId()?>"/></td>
                  <?php } ?>
                <?php } ?>
            </tr>
          <?php } ?>
    </table>
    <?php if(isset($_POST['consulterComs'])){?>
      <input class="bouton" type="submit" name="validerComsAConsulter" value="Valider"/>
    <?php } ?>
  </div>

  </form>
    <?php include '../view/footer.view.php'?>
</body>
</html>
