<?php session_start();
include '../controler/header.ctrl.php'; ?>
<link rel="stylesheet" href="../framework/accueil.css">

<img src="../view/Images/backgroundAccueil.jpg" alt="Background">

</header>

<?php foreach ($articles as $value){ ?>
    <h2> <?php echo $value->getTitre()?> </h2>
    <p> <?php echo $value->getContenu()?> </p>
    <br>
<?php } ?>

<?php include '../view/footer.view.php' ?>
</body>
</html>
