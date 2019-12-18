<?php session_start();
include '../controler/header.ctrl.php'; ?>
<link rel="stylesheet" href="../framework/informations.css">
<img src="../view/Images/backgroundInformation.jpg" alt="Background" class="imgBackground">
</header>

<h2>Deroulement inscription</h2>
<p>Pour vous inscrire au club vous devez etre en possession : <br>
                                            Un certificat Medical datant de moins de 3 ans sans complications de sante entre temps. <br>
                                            La feuille d'inscription du club telechargeable sur le site mais aussi disponible au club. <br>
                                            Un cheque de 235 Euros au nom de l'association. </p>



<h2>Le Certificat medical</h2>
<div class="certificat_medical">
<img src="../view/Images/certificatMedical.jpg" alt="Image d'un certificat medical concernant la pratique de la boxe muay thaï">
<button type="button" name="button"><a href="FicheInscription.html" download ="../view/Images/certificatMedical.jpg">Certificat Medical Type</a></button>

</div>

<h2>Feuille Inscription</h2>
<div class="Feuille_d'inscription">
<img src="../view/Images/FeuilleInscription.jpg" alt="Image montrant une feuille d'inscription a remplir" height = "600" width = "600">
<button type="button" name="button"><a href="FicheInscription.html" download = "../view/Images/FeuilleInscription.jpg">Fiche d'Inscription</a></button>
</div>

<h2>Cheque</h2>
<div class="Cheque">
<img src="../view/Images/cheque-specimen.png" alt="image d'un cheque de 235 euros au nom de l'association Grenoble Muay Thai">
</div>


<?php  include '../view/footer.view.php' ?>
