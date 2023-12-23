<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

      form{
        display: flex;
        
      }
      form div{
        padding: 8px ;
        margin: 8px;
      }
    </style>
</head>
<body>
    <fieldset>
        <legend>Prendre Contact</legend>
        <form action="exe3.php" method="post">
             <div class=bb">
             <label for="civilite">Civilité :</label>
                <input type="radio" name="civilite" value="Mm"> Mm
                <input type="radio" name="civilite" value="Mlle"> Mlle
                <input type="radio" name="civilite" value="Mr"> Mr
                <br>

                <input type="text" name="nom" placeholder="Nom*" required><br>
                <input type="text" name="prenom" placeholder="Prenom*" required><br>
                <input type="text" name="ville" placeholder="Ville*" required><br>
                <input type="submit" name="confirm" value="confirm">
             </div>
               
            
            <div class="mm">
            <input type="tel" name="tel" placeholder="Telephone*" required><br>
                <input type="email" name="email" placeholder="email*" required><br>
                <label for="CN">Profession</label>
                <select name="Profesion" id="CN">
                    <option value="professeur">professeur</option>
                </select>
                <label for="MO">Pays</label>
                <select name="pays" id="MO">
                    <option value="pays">Maroc</option>
                </select>
            
            
            </div>
               
        </form>
    </fieldset>
    <?php 
    if(isset($_POST["confirm"])) {
        if (
            isset($_POST["civilite"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) &&
            isset($_POST["ville"]) && isset($_POST["tel"]) && isset($_POST["email"]) &&
            isset($_POST["Profesion"]) && isset($_POST["pays"])
        ) {
            $civil = $_POST["civilite"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $ville = $_POST["ville"];
            $tel = $_POST["tel"];
            $email = $_POST["email"];
            $Profesion = $_POST["Profesion"];
            $pays = $_POST["pays"];

            $cordonner = array(
                "Civilité" => $civil,
                "Nom" => $nom,
                "Prénom" => $prenom,
                "Ville" => $ville,
                "Téléphone" => $tel,
                "Email" => $email,
                "Profession" => $Profesion,
                "Pays" => $pays
            );

            echo "<table border='1'>";
            foreach ($cordonner as $label => $valeur) {
                echo "<tr><td><strong>$label:</strong></td><td>$valeur</td></tr>";
            }
            echo "</table>";

        } else {
            echo "Tous les champs doivent être remplis.";
        }
    }
    ?>
</body>
</html>
