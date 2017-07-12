<?php
/**
 * Ce fichier nous sert à afficher les produits disponibles
 * Et aussi à afficher en bas de page le panier
 */
// Comme on souhaite se servir de la $_SESSION, il faut appeler la fonction session_start()
session_start(); 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon panier</title>
</head>
<body>
    <!-- Titre de la page -->
    <h1>Liste des produits</h1>
    <!-- Le <ul> qui contient les produits disponibles -->
    <ul>
        <li>Tasse 3WA (15€) <a href="ajout.php?nom=Tasse 3WA&prix=15">Ajouter</a></li>
        <li>Teeshirt 3WA (25€) <a href="ajout.php?nom=Teeshirt 3WA&prix=25">Ajouter</a></li>
        <li>Short 3WA (15€) <a href="ajout.php?nom=Short 3WA&prix=15">Ajouter</a></li>
        <li>Chaussures 3WA (45€) <a href="ajout.php?nom=Chaussures 3WA&prix=45">Ajouter</a></li>
    </ul>
    
    <div id="panier">
        <h2>Mon panier</h2>
        <!-- Le <ul> qui contient les produits déjà ajoutés au panier -->
        <ul>
            <!-- Pour chaque produit dans le panier ($_SESSION['panier']) : -->
            <?php foreach($_SESSION['panier'] as $produit): ?>
                <!-- On affiche un <li> avec les infos dedans -->
                <li><?= $produit['nom'] ?> (<?= $produit['prix'] ?>)</li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>