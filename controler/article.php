<?php
  $bdd = new PDO("mysql:host=localhost;dbname=articles;charset=utf8","root","");


  if (isset($_GET['id']) AND !empty($_GET['id'])) {
    $get_id = htmlspecialchars($_GET['id']); //securiser les variables avec htmlspecialchars

    $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $article->execute(array($get_id));

    if ($article->rowCount()==1) {
      $article = $article->fetch();
      $id = $article['id'];
      $titre = $article['titre'];
      $contenu = $article['contenu'];
    }else {
      die('Cet article n\'existe pas !');
    }

  }else {
    die('Erreur');
  }
 ?>


 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Article</title>
   </head>
   <body>
     <img src="miniatures/<?= $id ?>.jpg" alt="" width="400">
     <h1><?= $titre ?></h1>
     <p><?= $contenu ?></p>
   </body>
 </html>
