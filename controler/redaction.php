<?php
  $bdd = new PDO("mysql:host=localhost;dbname=articles;charset=utf8","root","");
  $mode_edition = 0;

  if (isset($_GET['edit']) AND !empty($_GET['edit'])) {
    $mode_edition = 1;
    $edit_id = htmlspecialchars($_GET['edit']);
    $edit_article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $edit_article->execute(array($edit_id));

    if ($edit_article->rowCount() == 1) {
      $edit_article = $edit_article->fetch();
    }else {
      die('Erreur : l\'article n\'existe pas');
    }

  }

  if (isset($_POST['article_titre'], $_POST['article_contenu'])) {
    if (!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {

      $article_titre = htmlspecialchars($_POST['article_titre']);
      $article_contenu = htmlspecialchars($_POST['article_contenu']);

      if ($mode_edition == 0) {

//        var_dump($_FILES);
//        var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));


        $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_publication)
         VALUES(?,?,NOW())');
        $ins->execute(array($article_titre, $article_contenu));
        $lastid = $bdd->lastInsertId();

      if (isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name'])) {
          if (exif_imagetype($_FILES['miniature']['tmp_name']) == 2 ) {
            $chemin = 'miniatures/'.$lastid.'.jpg';
            move_uploaded_file($_FILES['miniature']['tmp_name'],$chemin);
          }else {
            $message = 'Votre image doit etre au format jpg';
          }
      }

        $message = 'Votre article a bien été posté';
      }else {
        $update = $bdd->prepare('UPDATE articles SET titre = ?, contenu = ?, date_time_edition = NOW()
        WHERE id = ?');
        $update->execute(array($article_titre, $article_contenu, $edit_id));
        header('Location: http://localhost/ProjetArticle/article.php?id='.$edit_id);
        $message = 'Votre article a bien été mis à jour';

      }

    } else {
      $message = 'Veillez remplir tous les champs';
    }
  }

 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Redaction</title>
  </head>
  <body>
    <form class="" method="post" enctype="multipart/form-data">
    <input type="text" name="article_titre" <?php if($mode_edition==1){?> value=" <?= $edit_article['titre']?> " <?php } ?> placeholder="Titre"> <br>
     <textarea name="article_contenu" rows="8" cols="80" placeholder="Contenu de l'article"><?php if($mode_edition==1) { ?><?= $edit_article['contenu']?><?php } ?></textarea> <br>
     <?php if ($mode_edition == 0) { ?>
       <input type="file" name="miniature" value=""> <br>
     <?php } ?>
      <input type="submit" name="" value="Envoyer l'article">
    </form>
    <br>
    <?php if (isset($message)){ echo $message;} ?>
    <br>
    <a href="index.php">retour</a>

  </body>
</html>
