<?php 

$chariot = array("chocolat", "poulet", "citrons", "oignons");


function afficherChariot($produit) {
    echo $produit . "<br>";
}
echo"les produit:". "<br>";
array_walk($chariot, 'afficherChariot');


$chariot[] = "poisson";
$chariot[] = "tomates";
$chariot[] = "pâtes";
echo"tout les produit:". "<br>";
array_walk($chariot, 'afficherChariot');

function afichproduitC($produit){
    if(strtolower(substr($produit,0,1)) == 'c'){
        echo $produit . "<br>";
    }
}
echo"les produit contien C: ". "<br>";
array_walk($chariot, 'afichproduitC');

function afichproduitP($produit){
    if(strtolower(substr($produit,0,1)) == 'p'){
        echo $produit . "<br>";
    }
}
echo"les produit contien P: ". "<br>";
array_walk($chariot, 'afichproduitP');

$chariotParMois = array(
    "janvier" => array("pommes", "fromage", "yaourts"),
    "février" => array("carottes", "poulet rôti", "riz"),
    // ... Ajoutez d'autres mois avec des produits de votre choix
);

foreach ($chariotParMois as $mois => $achats) {
    echo "Mois : $mois". "<br>";
    array_walk($achats, 'afficherChariot');
    echo "<br>"; }

    // Chercher le mois où Ali a acheté le plus de produits
$moisAchatsMax = "";
$nombreProduitsMax = 0;

foreach ($chariotParMois as $mois => $achats) {
    $nombreProduits = count($achats);

    if ($nombreProduits > $nombreProduitsMax) {
        $nombreProduitsMax = $nombreProduits;
        $moisAchatsMax = $mois;
    }
}

echo "Le mois où Ali a acheté le plus de produits est : $moisAchatsMax avec $nombreProduitsMax produits.\n";


?>