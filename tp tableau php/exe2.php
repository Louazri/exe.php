<?php

// Tableau contenant une liste d'adresses e-mail
$emailList = array(
    'john.doe@example.com',
    'jane.smith@gmail.com',
    'bob.jones@example.com',
    'alice.white@yahoo.com',
    'david.brown@gmail.com',
    'mary.johnson@example.com',
    'sam.wilson@hotmail.com',
    'emily.carter@yahoo.com',
    'peter.smith@gmail.com',
);


$providerStats = array();


foreach ($emailList as $email) {
   
    $parts = explode('@', $email);

    
    if (count($parts) == 2) {
        $domain = $parts[1]; 
      
        if (isset($providerStats[$domain])) {
            $providerStats[$domain]++;
        } else {
            $providerStats[$domain] = 1;
        }
    }
}

// Afficher les statistiques
echo "Statistiques des fournisseurs d'accès :\n";
foreach ($providerStats as $provider => $count) {
    echo "$provider : $count\n";
}

?>
