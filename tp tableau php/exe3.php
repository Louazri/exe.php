<?php

$moisAnnee = array(
    "Janvier" => array("Numéro" => "1", "MAB" => "Jan", "Nombre de Jours" => "31", "ANG" => "January"),
    "Février" => array("Numéro" => "2", "MAB" => "Fev", "Nombre de Jours" => "28", "ANG" => "February"),
    "Mars" => array("Numéro" => "3", "MAB" => "Mar", "Nombre de Jours" => "31", "ANG" => "March"),
    "Avril" => array("Numéro" => "4", "MAB" => "Avr", "Nombre de Jours" => "30", "ANG" => "April"),
    "Mai" => array("Numéro" => "5", "MAB" => "Mai", "Nombre de Jours" => "31", "ANG" => "May"),
    "Juin" => array("Numéro" => "6", "MAB" => "Jui", "Nombre de Jours" => "30", "ANG" => "June"),
    "Juillet" => array("Numéro" => "7", "MAB" => "Jul", "Nombre de Jours" => "31", "ANG" => "July"),
    "Aout" => array("Numéro" => "8", "MAB" => "Aou", "Nombre de Jours" => "31", "ANG" => "August"),
    "Septembre" => array("Numéro" => "9", "MAB" => "Sep", "Nombre de Jours" => "30", "ANG" => "September"),
    "Octobre" => array("Numéro" => "10", "MAB" => "Oct", "Nombre de Jours" => "31", "ANG" => "October"),
    "Novembre" => array("Numéro" => "11", "MAB" => "Nov", "Nombre de Jours" => "30", "ANG" => "November"),
    "Décembre" => array("Numéro" => "12", "MAB" => "Dec", "Nombre de Jours" => "31", "ANG" => "December"),
);

echo"<table border='1'>";
echo " <th>Mois</th>    <th>Numéro</th>     <th>MAB</th>   <th>Nombre de jours</th>   <th>Mois en anglais</th>   ";

foreach ($moisAnnee as $mois => $details) {
    echo"<tr><td>$mois</td><td>{$details['Numéro']}</td><td>{$details['MAB']}</td><td>{$details['Nombre de Jours']}</td><td>{$details['ANG']}</td></tr>";
}
echo"</table>";


$dateAVerifier = "20 Novembre 2013";
$elementsDate = explode(" ", $dateAVerifier);
$jour = (int)$elementsDate[0];
$mois = $elementsDate[1];
$annee = (int)$elementsDate[2];


if (array_key_exists($mois, $moisAnnee) && $jour >= 1 && $jour <= $moisAnnee[$mois]["Nombre de Jours"]) {
    // Afficher la date dans différents formats
    $dateFormat1 = "$jour/{$moisAnnee[$mois]['Numéro']}/$annee";
    $dateFormat2 = "$jour $mois $annee";
    $dateFormat3 = "$annee {$moisAnnee[$mois]['ANG']} $jour";

    echo "\nDate valide :\n" ."<br>";
    echo "Format 1: $dateFormat1\n"  ."<br>";
    echo "Format 2: $dateFormat2\n" ."<br>";
    echo "Format 3: $dateFormat3\n" ."<br>";
} else {
    echo "\nDate invalide.\n";
}

?>
