<?php session_start();
include '../controler/header.ctrl.php'; ?>
<?php
  $bdd = new PDO("mysql:host=localhost;dbname=articles;charset=utf8","root","");

  $articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication DESC');
 ?>

<link rel="stylesheet" href="../framework/accueil.css">

<img src="../view/Images/backgroundAccueil.jpg" alt="Background">
</header>



</head>
<body>

  <h1>Actualités</h1>

  <a href="redaction.php">Creer un Article</a>

  <ul>
    <?php while ($a = $articles->fetch()) { ?>
      <li>
        <a href="article.php?id=<?= $a['id'] ?>">
        <img src="miniatures/<?= $a['id'] ?>.jpg" alt="" width="100"> <br>
          <?= $a['titre'] ?>  </a> |
        <a href="redaction.php?edit=<?= $a['id'] ?>">Modifier</a> | <a href="supprimer.php?id=<?= $a['id'] ?>">Supprimer</a>
      </li>
   <?php } ?>
  </ul>




<?php include '../view/footer.view.php' ?>
</body>
</html>
