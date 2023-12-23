<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfert de Fichier PDF</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="pdfFile">Sélectionnez un fichier PDF (max 10 Mo) :</label>
        <input type="file" name="pdfFile" accept=".pdf" required>
        <br>
        <input type="submit" value="Transférer le fichier">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le formulaire a été soumis avec un fichier
    if (isset($_FILES["pdfFile"]) && $_FILES["pdfFile"]["error"] == UPLOAD_ERR_OK) {
        // Vérifier l'extension du fichier
        $allowedExtensions = ["pdf"];
        $fileExtension = pathinfo($_FILES["pdfFile"]["name"], PATHINFO_EXTENSION);

        if (in_array(strtolower($fileExtension), $allowedExtensions)) {
            // Vérifier la taille du fichier
            $maxFileSize = 10 * 1024 * 1024; // 10 Mo
            if ($_FILES["pdfFile"]["size"] <= $maxFileSize) {
                // Déplacer le fichier vers un dossier de destination
                $uploadDir = "uploads/";
                $uploadPath = $uploadDir . basename($_FILES["pdfFile"]["name"]);

                if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $uploadPath)) {
                    // Afficher les détails du fichier transféré
                    $fileName = $_FILES["pdfFile"]["name"];
                    $fileSize = $_FILES["pdfFile"]["size"];

                    echo "Fichier reçu avec succès!<br>";
                    echo "Nom du fichier: $fileName<br>";
                    echo "Taille du fichier: " . round($fileSize / (1024 * 1024), 2) . " Mo";
                } else {
                    echo "Une erreur s'est produite lors du transfert du fichier.";
                }
            } else {
                echo "La taille du fichier dépasse la limite autorisée (10 Mo).";
            }
        } else {
            echo "Seuls les fichiers PDF sont autorisés.";
        }
    } else {
        echo "Aucun fichier n'a été soumis ou une erreur s'est produite lors du transfert.";
    }
} else {
    echo "Accès non autorisé.";
}
?>
