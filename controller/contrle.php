<?php
include_once "../modal/ajouter_produit.php";
include_once "../modal/affichage_produits.php";
require_once "../vue/page.php";
include_once "../modal/supression.php";

$conn = new mysqli("localhost","root","", "sotkage");

if($conn ->connect_errno){
    echo "connection filed ". $conn->connect_errno;
    exit();
}

function dd(...$var) {
    foreach ($var as $elem) {
        echo '<pre class="codespan">';
        echo '<code>';
        !$elem || $elem == '' ? var_dump($elem) : print_r($elem);
        echo '</code>';
        echo '</pre>';
    }
    die();
}



 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = trim($_POST['nom']);
    $price = trim($_POST['prix']);
    $description = trim($_POST['description']);

    if (!empty($name) && !empty($price) && !empty($description)) {
       
        ajouter($name, $price, $description, $conn);
    } else {
        echo "Tous les champs sont obligatoires.";
    }
}



$produits = affichage($conn);

if (!empty($produits)) {

} else {
    echo "Aucun produit trouvé.";
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_id'])) {
    // Récupérer l'identifiant du produit à supprimer
    $id = intval($_POST['delete_id']);
    
    // Appeler la fonction de suppression
    if (delete($conn, $id)) {
        $message = "Produit supprimé avec succès.";
    } else {
        $message = "Erreur lors de la suppression.";
    }
}


$conn->close();
?>
