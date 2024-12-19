<?php

function affichage($conn) {
    // Requête SQL
    $data = "SELECT * FROM produit";
    
    $result = $conn->query($data);

    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
      
        // Retourner les données
        return $rows;
    } else {
        // Afficher un message d'erreur en cas de problème
        die("Erreur dans la requête : " . $conn->error);
    }
}


?>