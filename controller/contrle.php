<?php

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

include_once "../modal/ajouter_produit.php";
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
ajouter($_POST['nom'],$_POST['prix'],$_POST['description'],$conn);

}


?>