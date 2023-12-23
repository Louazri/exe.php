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
    }elseif(isset($_POST["montant"]) && isset($_POST["taux"]) && isset($_POST["mesualite"])){
        $montant = $_POST["montant"];
        $taux = $_POST["taux"];
        $mesualite = $_POST["mesualite"];
        $duree = ($montant * (1 + $taux) / ( $mesualite * 12));
    }elseif(isset($_POST["taux"]) && isset($_POST["duree"]) && isset($_POST["mesualite"])){
        $taux = $_POST["taux"];
        $mesualite = $_POST["mesualite"];
        $duree = $_POST["duree"];

        $montant = $mesualite / ((1+$taux)/($duree*12));
    }elseif( isset($_POST["montant"]) && isset($_POST["duree"]) && isset($_POST["mesualite"])){
        $mesualite = $_POST["mesualite"];
        $duree = $_POST["duree"];
        $montant = $_POST["montant"];

        $taux = ($mesualite/$montant)*($duree*12)+1;
    }else{
        echo"des cordoner";
    }
    
}
?>
 
    <fieldset>
        <legend>simultaion credit a la consommation</legend>
    <form action="exe6.php" method="post"> 
        <table>
           <tr>
            <td><label for="montant">Montant de l'emprunt :</label></td>
            <td> 
                <input type="number" name="montant" value="<?php echo   $montant;?>">
                <input type="submit" name="submit" value="Calculer montant"></td>
            </tr>

            <tr>
                <td><label for="taux">Taux d'intérêt (TCC) :</label></td>
                <td>
                    <input type="number" name="taux" value="<?php echo $mesualite;?>">
                    <input type="submit" name="submit" value="calculer taux">
                </td>
            </tr>

            <tr>
                <td> <label for="duree">Nombre des années :</label></td>
                <td>  
                    <input type="number" name="duree" value="<?php echo  $duree;?>">
                    <input type="submit" name="submit" value="calculer duree">
                </td>
            </tr>
            <tr>
                <td> <label for="mesualite">Montant de chaque versement :</label></td>
                <td>
                <input type="number" name="mesualite" value="<?php echo $mesualite;?>" >
                <input type="submit" name="submit" value="calculer mensualite">
                </td>
            </tr>
         
            
        </table>
    </form>
    </fieldset>
    
</body>
</html>