<?php
// require_once "./controller/contrle.php";

function ajouter($PRODUIT_NAME, $PRODUIT_prix, $PRODUIT_description, $conn){
        $sql = "INSERT INTO produit (name, prix, description) VALUES (?, ?, ?)";
        
        // Prepare the statement
        $stmt = $conn->prepare($sql);
        
        // Bind parameters
        $stmt->bind_param("sss", $PRODUIT_NAME, $PRODUIT_prix, $PRODUIT_description);
        
        // Execute the query
        if ($stmt->execute()) {
            echo "Product added successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close the statement
        $stmt->close();
    
}



?>