<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Adresse E-mail</title>
</head>
<body>
    <h1>Formulaire d'Adresse E-mail</h1>
    
    <form action="exe4.php" method="post">
        <label for="email">Adresse E-mail :</label>
        <input type="email" name="email" required>

        <!-- Champ caché pour récupérer le type de navigateur -->
        <input type="hidden" name="navigateur" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">

        <br>

        <input type="submit" name="conferm" value="Soumettre">
    </form>
</body>
</html>

<?php
if (isset($_POST["conferm"])) {
    
    if(isset($_POST["email"]) && isset($_POST["navigateur"])) {
        $email = ($_POST["email"]);
        $navigateur = ($_POST["navigateur"]);

        echo "<h2>Récapitulatif :</h2>";
        echo "<p>Adresse E-mail : $email</p>";
        echo "<p>Navigateur : $navigateur</p>";
    } else {
        echo "<p>Données manquantes.</p>";
    }
} else {
    echo "<p>Accès non autorisé.</p>";
}
?>

