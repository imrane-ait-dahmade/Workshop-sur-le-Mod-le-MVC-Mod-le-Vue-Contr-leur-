<?php 

function ajouter($PRODUIT_NAME, $PRODUIT_prix, $PRODUIT_description, $conn) {
    $sql = "INSERT INTO produit (nom, prix, description) VALUES (?, ?, ?)";
    

    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    
    
    $stmt->bind_param("sss", $PRODUIT_NAME, $PRODUIT_prix, $PRODUIT_description);
    
    
    if ($stmt->execute()) {
        echo "Produit ajouté avec succès.";
    } else {
        echo "Erreur : " . $stmt->error;
    }
    
   
    $stmt->close();
}


?>