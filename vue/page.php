<?php
require_once "../controller/contrle.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex  w-full ">

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3  bg-gray-100 flex items-center justify-center min-h-screen">
  
  <form id="inscription-form" action="../controller/contrle.php" method="POST" class="space-y-4">
    <div id="place_name">
      <label for="nom" class="block text-gray-700 font-bold mb-2">nom de produit</label>
      <input type="text" id="nom" name="nom" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div id="place_email">
      <label for="prix" class="block text-gray-700 font-bold mb-2">prix</label>
      <input type="number" id="prix" name="prix" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div id="place_password">
      <label for="discription" class="block text-gray-700 font-bold mb-2">descreption</label>
      <input type="description" id="description" name="description" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">ajouter ce produit</button>
    </div>
    <div id="inscription-message" class="hidden"></div>
  </form>
</div>
<section class="bg-white shadow-md rounded-lg p-6 mb-8 w-2/3">
    <h2 class="text-xl font-bold text-gray-800 mb-4"> les produits</h2>
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-gray-600">
                  
                    <th class="px-4 py-2 text-left border border-gray-300">produit</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Prix</th>
                    <th class="px-4 py-2 text-left border border-gray-300">description</th>
                </tr>
            </thead>
            <tbody>
            <?php

if (!empty($produits)) {
    foreach ($produits as $produit) {
        echo "Nom : " . htmlspecialchars($produit['nom']) . "<br>";
        echo "Prix : " . htmlspecialchars($produit['prix']) . " €<br>";
        echo "Description : " . htmlspecialchars($produit['description']) . "<br><br>";
    }
} else {
    echo "Aucun produit trouvé.";
}
?>
            </tbody>
        </table>
    </div>
</section>
</body>
</html>