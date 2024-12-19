<?php  

 function delete($conn,$id){
    $del = "DELETE FROM produit where id = ?";
    $stmt = $conn->prepare($del);

    if($stmt){
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
        $stmt->close();
    }
        else {
            die("Erreur lors de la préparation : " . $conn->error);
        }

 }
?>