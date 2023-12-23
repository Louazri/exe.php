<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande de Voiture</title>
</head>
<body>
    <form action="exe2.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <br>

        <label for="marque">Marque de la voiture :</label>
        <input type="text" name="marque" required>

        <br>

        <label>Options :</label>
        <br>
        <input type="checkbox" name="options[]" value="Climatisation"> Climatisation
        <br>
        <input type="checkbox" name="options[]" value="InjectionMethane"> Injection au méthane
        <br>
        <input type="checkbox" name="options[]" value="VentilationRotules"> Ventilation des rotules
        <br>
        <input type="checkbox" name="options[]" value="Alarme"> Alarme

        <br>

        <input type="submit" name="confirm" value="Commander">
    </form>
</body>
</html>

<?php
if(isset($_POST["confirm"])) {
    
    if(isset($_POST["marque"]) && isset($_POST["nom"]) && isset($_POST["options"])) {
        $marque = $_POST["marque"];
        $nom = $_POST["nom"];
        $options = $_POST["options"];

        echo "La voiture de rêve de M.$nom est une $marque avec options :";
       echo"<table border='1'>";
       foreach ($options as $option) {
        echo "<tr><td>$option</td></tr>";
    }
    echo "</table>";
       
    } else {
        echo "Tous les champs doivent être remplis.";
    }
}
?>
