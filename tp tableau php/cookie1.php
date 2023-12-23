<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <form action="cookie1.php" method="post">

        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <br>

        <label for="motDePasse">Mot de passe :</label>
        <input type="password" name="motDePasse" required>

        <br>

        <input type="submit" name="connexion" value="Se Connecter">
    </form>
</body>
</html>
<?php 
if(isset($_POST["connexion"])){
    $nom = $_POST["nom"];
    $motDePasse = $_POST["motDePasse"];

    if($nom == "utulisateur" && $motDePasse == "motDePasse"){
        $duree = time() + (86400);
        setcookie("nom-etulisatuer",$nom,$duree);
        setcookie("nomdepass-etulisatuer",$motDePasse,$duree);

        echo"Connexion reusiie ! les information ont ete enregistrees dans un cookie.";
    }else{
        echo"Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
