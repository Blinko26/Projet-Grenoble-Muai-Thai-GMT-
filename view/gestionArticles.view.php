<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <br>
 <br>
    <h1>Gestion des articles</h1>
 <!--Menu de recherche des articles en fonction de differents criteres -->
 <form action="../controler/gestionArticles.ctrl.php" method ="post">
   <?php if($role!='moderateur'){?> <!-- Si l'utilisateur est le modérateur, alors il a la possibilité de supprimer ou modifier un commentaire s'il le souhaite-->
     <input type="submit" name ="supprimerArticle" value="Supprimer un article">
     <input type="submit" name ="modifierArticle" value="Modifier un article">
   <?php } ?>
   <input type="submit" name ="consulterComs" value="Consulter les commentaires"> <!--Sinon, la seule possibilité est de consulter les commentaires -->
</form>
<br>
 <form action="../controler/gestionComs.ctrl.php" method ="post">
 <div class = "criteres">
        <table> <!--Table regroupant tous les attributs pour lesquels il est possible de trier -->
          <tr>
              <th> Numéro d'article </td>
              <th> Titre </td>
              <th> Date de publication</td>
              <th> Date de dernière édition </td>
              <th> Nombre de commmentaires </td>
          </tr>
    <?php
    //Affichage des articles en fonctions des criteres de selections demandes
            foreach ($articles as $value) { ?>
            <tr>
                <td> <?php echo $value->getId(); ?></td>
                <td> <?php echo $value->getTitre(); ?></td>
                <td> <?php echo $value->getDatePubli() ?></td>
                <td> <?php echo $value->getDateEdit(); ?></td>
                <td> <?php echo $DAO->getNbComsByArticle($value->getId()); ?></td>
                <?php if(isset($_POST['consulterComs'])){?> <!--Si l'utilisateur décide de consulter les coms -->
                  <?php if($DAO->getNbComsByArticle($value->getId())==0){?> <!--Pour l'article d'id 0, la possibilité de consulter les commentaires est désactivée -->
                  <td> <input type="radio" id=<?php echo $value->getId()?> name="comsAConsulter" value="<?php echo $value->getId()?>" disabled/></td>
                <?php } else { ?> <!--Sinon, donne la possibilité de consulter les commentaires pour chaque article -->
                    <td> <input type="radio" id=<?php echo $value->getId()?> name="comsAConsulter" value="<?php echo $value->getId()?>"/></td>
                  <?php } ?>
                <?php } ?>
            </tr>
          <?php } ?>
    </table>
    <?php if(isset($_POST['consulterComs'])){?> <!--Demande à valider quel commentaire l'utilisateur veut consulter -->
      <input type="submit" name="validerComsAConsulter" value="Valider"/>
    <?php } ?>
  </div>

  </form>
    <?php include '../view/footer.view.php'?>
</body>
</html>
