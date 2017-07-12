<?php
/**
 * Dans ce fichier on gère l'ajout d'un produit dans le panier
 * Comme on veut utiliser $_SESSION, on commence par la fonction session_start()
 */
session_start();

// Si dans le GET on a un nom de produit et un prix de produit
if(array_key_exists('nom', $_GET) && array_key_exists('prix', $_GET)){
    // On créé une variable $produit qui est un tableau
    // qui contient 2 éléments : le nom du produit et le prix du produit
    $produit = [
        "nom" => $_GET['nom'],
        "prix" => $_GET['prix']
    ];
    // On ajoute au tableau $_SESSION['panier'] un nouvel élément qui est le produit
    $_SESSION['panier'][] = $produit;
    
    // $tableau = [1, 2, 3];
    // $tableau[] = 4;
    // 1, 2, 3, 4
}

// On redirige vers l'index.php
header('Location: index.php');
?>