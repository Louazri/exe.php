<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="exe1.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <br>

        <label for="sexe">Sexe :</label>
        <input type="checkbox" name="sexe" value="femme"> Femme
        <input type="checkbox" name="sexe" value="homme"> Homme

        <br>

        <input type="submit" name="confirm" value="Soumettre">
    </form>
</body>
</html>

<?php 
if(isset($_POST["confirm"])) {
    // Vérification de l'existence des champs
    if(isset($_POST["sexe"]) && isset($_POST["nom"]) && isset($_POST["password"])) {
        $sex = $_POST["sexe"];
        $nam = $_POST["nom"];
        $pass = $_POST["password"];

        // Vérification du mot de passe
        if($pass === "SRC2") {
            // Affichage du message de salutation en fonction du sexe
            if($sex === "femme") {
                echo "Bonjour Mme {$nam}";
            } elseif($sex === "homme") {
                echo "Bonjour M. {$nam}";
            } else {
                echo "Bonjour {$nam}";
            }
        } 
    } else {
        echo "Tous les champs doivent être remplis.";
    }
}
?>
