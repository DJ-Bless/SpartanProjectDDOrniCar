<?php

if (!empty($_POST)) {
    $erreur = false;

    if (empty($_POST["nom"])) {
        echo("Le champ nom est vide.<br/>");
        $erreur = true;
    }
    if (empty($_POST["prenom"])) {
        echo("Le champ prenom est vide.<br/>");
        $erreur = true;
    }
    if (empty($_POST["pseudo"])) {
        echo("Le champ pseudo est vide.<br/>");
        $erreur = true;
    }
    if (empty($_POST["email"])) {
        echo("Le champ email est vide. <br/>");
        $erreur = true;
    }
    if (empty($_POST["mdp"])) {
        echo("Le champ mot de passe est vide. <br/>");
        $erreur = true;
    }
    if (empty($_POST["mdp2"])) {
        echo("Le champ de confirmation du mot de passe est vide. <br/>");
        $erreur = true;
    }

    if (empty($_POST["icone"])) {
        echo("Veuillez choisir une photo de profil. <br/>");
        $erreur = true;
    }

    if (!isset($_POST['accept'])) {
        echo("Vous devez accepter les Conditions Générales d'Utilisation pour pouvoir profiter d'OrniCar. <br/>");
        $erreur = true;
    }

    if (($_POST['mdp']) != ($_POST['mdp2'])) {
        echo("La vérification de mot de passe ne correspond pas au mot de passe précédemment saisi. <br/>");
        $erreur = true;
    }

    if ($erreur == true) {
        printf("<a href='inscription.php'> Retour à l'inscription </a>");
    } else {
        $icone = $_FILES['icone'];
        $iconeName = $icone['tmp_name'];
        $iconeType = $icone["type"];
        $emplacementDeplacement = '../ressources/imagesProfiles/' . $_POST['email'] . '.' . $iconeType;
        move_uploaded_file($iconeName, $emplacementDeplacement);

        // Ajout dans BDD
        $conn = connexionBdd();
        $insertion = 'INSERT INTO user(idUser, nom, prenom, pseudo, mdp, email, idVoiture, photo, note, solde, age) VALUES(\'\',' . $_POST['nom'] . ',' . $_POST['prenom'] . ',' . $_POST['pseudo'] . ',' . $_POST['mdp'] . ',' . $_POST['email'] . ',\'\',' . $emplacementDeplacement . ',\'\',0,\'\')';
        mysqli_query($conn, $insertion);
        mysqli_close($conn);

        echo 'Félicitations pour votre inscription !';
    }
}


?>