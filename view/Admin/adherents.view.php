    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Gestion des adherents</h1>

    <form action="../../controler/gestionAdherents.ctrl.php" method ="post">
        <div>
            <input type="radio" name ="nom" value="Nom"> <label for="">Nom</label>
            <input type="radio" name ="prenom" value="Prenom"> <label for="">Prenom</label>
            <input type="radio" name ="sexe" value="sexe"> <label for="">sexe</label>
            <input type="radio" name ="dateNaissance" value="dateNaissance"> <label for="">dateNaissance</label>
            <input type="radio" name ="poids" value="poids"> <label for="">poids</label>
            <input type="radio" name ="taille" value="taille"> <label for="">taille</label>
            <input type="radio" name ="paiement" value="paiement"> <label for="">paiement</label>
            <input type="radio" name ="certificatMedical" value="CertificatMedical"> <label for="">CertificatMedical</label>
        </div>
        <div>
            <button type="submit" value = "valider">Trier</button>
        </div>
    </form>


    <?php
        if(isset($_POST['nom'])){
            foreach ($utilisateurName as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['prenom'])){
            foreach ($utilisateurPrenom as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['dateNaissance'])){
            foreach ($utilisateurdateNaissance as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['poids'])){
            foreach ($utilisateurPoids as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['taille'])){
            foreach ($utilisateurTaille as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['paiement'])){
            foreach ($utilisateurPaiement as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['certificatMedical'])){
            foreach ($utilisateurCertif as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }else if(isset($_POST['autorisationParentale'])){
            foreach ($utilisateurAutorisationParentale as $value) {
                echo $value->getNom(); echo '  ';
                echo $value->getPrenom(); echo '  ';
                echo $value->getDateNaissance(); echo '  ';
                echo $value->getPoids(); echo '  ';
                echo $value->getTaille(); echo '  ';
                echo $value->getPaiement();
                echo '  ';
                echo $value->getCertifMedical();
                echo '<br>';
            }
        }

    ?>
</body>
</html>