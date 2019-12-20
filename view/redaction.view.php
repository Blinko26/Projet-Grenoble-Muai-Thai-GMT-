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
