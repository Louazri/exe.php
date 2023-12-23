<?php


$personnes = array(
    "Alice" => array("prenom" => "Alice", "ville" => "Paris", "age" => 25),
    "Bob" => array("prenom" => "Bob", "ville" => "Lyon", "age" => 30),
    "Charlie" => array("prenom" => "Charlie", "ville" => "Marseille", "age" => 22),
);


echo "Lecture du tableau avec foreach:<br>";
foreach ($personnes as $nom => $infos) {
    echo "Nom: $nom, Prénom: {$infos['prenom']}, Ville: {$infos['ville']}, Âge: {$infos['age']}<br>";
}




echo "<br>Lecture du tableau avec while:<br>";
$keys = array_keys($personnes);
$index = 0;
while ($index < count($personnes)) {
    $nom = $keys[$index];
    $infos = $personnes[$nom];
    echo "Nom: $nom, Prénom: {$infos['prenom']}, Ville: {$infos['ville']}, Âge: {$infos['age']}<br>";
    $index++;
}



?>
