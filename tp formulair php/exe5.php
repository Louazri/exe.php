<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation de Crédit</title>
</head>
<body>
<?php 
if(isset($_POST["submit"])){
    if( isset($_POST["montant"]) && isset($_POST["taux"]) && isset($_POST["duree"])  ){
        $montant = $_POST["montant"];
        $taux = $_POST["taux"];
        $duree = $_POST["duree"];

        $mesualite = ($montant * (1 + $taux) / ($duree * 12));
    }
    
}
?>
 
    <fieldset>
        <legend>simultaion credit a la consommation</legend>
    <form action="exe5.php" method="post">
        <label for="montant">Montant de l'emprunt :</label>
        <input type="number" name="montant" required>

        <br>

        <label for="taux">Taux d'intérêt (TCC) :</label>
        <input type="number" name="taux" required>

        <br>

        <label for="duree">Nombre des années :</label>
        <input type="number" name="duree" required>

        <br>

        <label for="mesualitee">Montant de chaque versement :</label>
        <input type="number" name="mesualitee" value="<?php echo $mesualite;?>" >

        <input type="submit" name="submit" value="Simuler">
    </form>
    </fieldset>
    
</body>
</html>


