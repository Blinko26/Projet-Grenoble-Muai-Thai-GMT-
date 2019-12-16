<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../framework/gestionAdherents.css">
    <title>Document</title>
</head>
<body>
    <h1>Gestion des adherents</h1>
 <!--Menu de recherche des adherents en fonction de differents criteres -->
    <form action="../controler/gestionAdherents.ctrl.php" method ="post">
        <table>
            <tr>
                <td><input type="radio" name ="nom" value="Nom"> <label for="">Nom</label></td>
                <td><input type="radio" name ="prenom" value="Prenom"> <label for="">Prenom</label></td>
                <td><input type="radio" name ="sexe" value="sexe"> <label for="">sexe</label></td>
                <td><input type="radio" name ="dateNaissance" value="dateNaissance"> <label for="">Date Naissance</label></td>
                <td><input type="radio" name ="poids" value="poids"> <label for="">poids</label></td>
                <td><input type="radio" name ="taille" value="taille"> <label for="">taille</label></td>
                <td><input type="radio" name ="paiement" value="paiement"> <label for="">paiement</label></td>
                <td><input type="radio" name ="certificatMedical" value="CertificatMedical"> <label for="">Certificat Medical</label></td>
            </tr>
        </table>
        <div>
            <button type="submit" value = "valider">Trier</button>
        </div>
    </form>
        <table>
                <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Sexe</td>
                <td>Date De Naissance</td>
                <td>Poids</td>
                <td>Taille</td>
                <td>Paiement</td>
                <td>Certificat Medical</td>
            </tr>

    <?php
    //Affichage des adherents en fonctions des criteres de selections demandes

        if(isset($_POST['nom']) || isset($_POST['prenom']) || isset($_POST['sexe']) || isset($_POST['dateNaissance'])
        || isset($_POST['poids']) || isset($_POST['taille']) || isset($_POST['paiement']) || isset($_POST['certificatMedical']) ){
            foreach ($utilisateur as $value) { ?>
            <tr>
                <td> <?php echo $value->getNom(); echo '  '; ?></td>
                <td> <?php echo $value->getPrenom(); echo '  '; ?></td>
                <td> <?php echo $value->getSexe() ?></td>
                <td> <?php echo $value->getDateNaissance(); echo '  '; ?></td>
                <td> <?php echo $value->getPoids(); echo '  '; ?></td>
                <td> <?php echo $value->getTaille(); echo '  '; ?></td>
                <td> <?php echo $value->getPaiement(); echo '  '; ?></td>
                <td> <?php echo $value->getCertifMedical(); ?></td>

            </tr>
            <?php
            }
        }
    ?>
    </table>
</body>
</html>
