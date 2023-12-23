<?php
session_start();

// Vérifier si le formulaire est soumis
if(isset($_POST["AJOUTER_Panier"])){
    // Récupérer les données du formulaire
    $code = $_POST["code"];
    $article = $_POST["article"];
    $prix = $_POST["prix"];

    // Ajouter les données au tableau $_SESSION
    $_SESSION['code'] = isset($_SESSION['code']) ? $_SESSION['code']."/".$code : $code;
    $_SESSION['article'] = isset($_SESSION['article']) ? $_SESSION['article']."/".$article : $article;
    $_SESSION['prix'] = isset($_SESSION['prix']) ? $_SESSION['prix']."/".$prix : $prix;
}

// Vérifier si le bouton "FIN" est cliqué
if(isset($_POST["FIN"])){
    // Vider le panier en détruisant la session
    session_unset();
    session_destroy();
}

// Afficher les informations sous forme d'un tableau HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
</head>
<body>

    <h2>Panier</h2>

    <?php if(isset($_SESSION['code'])): ?>

    <table border="1">
        <tr>
            <th>Code</th>
            <th>Article</th>
            <th>Prix</th>
        </tr>

        <?php
        $tab_code = explode("/", $_SESSION['code']);
        $tab_article = explode("/", $_SESSION['article']);
        $tab_prix = explode("/", $_SESSION['prix']);

        $total = 0;

        for($i = 1; $i < count($tab_code); $i++): ?>
            <tr>
                <td><?= $tab_code[$i] ?></td>
                <td><?= $tab_article[$i] ?></td>
                <td><?= $tab_prix[$i] ?> €</td>
            </tr>
            <?php $total += floatval($tab_prix[$i]);
        endfor; ?>

        <tr>
            <td colspan="2"><strong>Total :</strong></td>
            <td><?= $total ?> €</td>
        </tr>
    </table>

    <?php endif; ?>

    <br>

    <form action="" method="post">
        <label for="code">Code :</label>
        <input type="text" name="code" required>
        <br>

        <label for="article">Article :</label>
        <input type="text" name="article" required>
        <br>

        <label for="prix">Prix :</label>
        <input type="number" name="prix" step="0.01" required>
        <br>

        <input type="submit" name="AJOUTER_Panier" value="AJOUTER Panier">
        <input type="submit" name="FIN" value="FIN">
    </form>

</body>
</html>
