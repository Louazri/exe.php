<?php

// Étape 1
$personne = array(
    "Alami Ali" => array("Age" => "45", "tel" => "065544334"),
    "Zaidi Omar" => array("Age" => "36", "tel" => "06231122"),
    "Samadi Boujamaa" => array("Age" => "65", "tel" => "06221122"),
    "Aaidi Mina" => array("Age" => "54", "tel" => "06246122")
);

// Étape 2
echo "Noms des personnes :\n" ."<br>";
foreach (array_keys($personne) as $nomPrenom) {
    $nom = explode(" ", $nomPrenom)[0];
    echo $nom . "\n"."<br>";
}

// Étape 3
echo "\nPersonnes triées par ordre croissant sur le nom :\n"."<br>";
ksort($personne);
print_r($personne);

// Étape 4
function longueurNom($a, $b)
{
    return strlen($a) - strlen($b);
}

echo "\nPersonnes triées par longueur du nom :\n"."<br>";
uksort($personne, 'longueurNom');
print_r($personne);

// Étape 5
function comparaisonAge($a, $b)
{
    return $a['Age'] - $b['Age'];
}

echo "\nPersonnes triées par ordre croissant sur l'âge :\n"."<br>";
usort($personne, 'comparaisonAge');
print_r($personne);

// Étape 6
$nouveauTableau = array();
$i = 1;
foreach ($personne as $nomPrenom => $details) {
    list($nom, $prenom) = explode(" ", $nomPrenom);
    $nouveauTableau["personne $i"] = array("nom" => $nom, "prenom" => $prenom, "age" => $details['Age']);
    $i++;
}

// Étape 7
echo "\nNouveau tableau par nom :\n"."<br>";
print_r($nouveauTableau);

?>
