<?php include '../controler/header.ctrl.php' ?>
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
 </header>
 <br>
 <br>
    <h1>Gestion des commentaires</h1>
 <!--Menu de recherche des adherents en fonction de differents criteres -->

<h2>Article</h2>
<form action="../controler/gestionArticles.ctrl.php" method ="post">
  <table>
    <tr>
        <th> Numero d'article </td>
        <th> Titre </td>
        <th> Date de publication</td>
        <th> Date de dernière édition</td>
        <th> Contenu </td>
    </tr>
      <tr>
          <td> <?php echo $article->getId(); ?></td>
          <td> <?php echo $article->getTitre(); ?></td>
          <td> <?php echo $article->getDatePubli() ?></td>
          <td> <?php echo $article->getDateEdit(); ?></td>
          <td> <?php echo $article->getContenu(); ?></td>
          <td> <input type="submit" name ="retour" value="Retour aux articles"></td>
      </tr>
    </table>
</form>
<h2>Commentaires</h2>
<?php if(sizeof($commentaires)>0){?>
 <form action="../controler/gestionComs.ctrl.php" method ="post">
   <input type="submit" name ="supprimerComs" value="Supprimer des commentaires">
 <div class = "criteres">
        <table>
          <tr>
              <th> Numero de commentaire </td>
              <th> Auteur </td>
              <th> Article</td>
              <th> Date </td>
              <th> Contenu </td>
          </tr>
    <?php
    //Affichage des adherents en fonctions des criteres de selections demandes
            foreach ($commentaires as $value) { ?>
            <tr>
                <td> <?php echo $value->getNumCom(); ?></td>
                <td> <?php echo $DAO->getAdherentById($value->getNumAdh())->getLogin(); ?></td>
                <td> <?php echo $value->getNumArticle(); ?></td>
                <td> <?php echo $value->getDateCom(); ?></td>
                <td> <?php echo $value->getContenuCom(); ?></td>
                <?php if(isset($_POST['supprimerComs'])){ ?>
                  <td> Supprimer le commentaire n°<input type="submit" name ="supprimer" value=<?php echo $value->getNumCom(); ?>></td>
                <?php } ?>
            </tr>
          <?php } ?>
    </table>
  </div>

  </form>
<?php } else {?>
  <p>Il n'y a aucun commentaire pour cet article</p>
  <?php }?>
    <?php include '../view/footer.view.php'?>
</body>
</html>
