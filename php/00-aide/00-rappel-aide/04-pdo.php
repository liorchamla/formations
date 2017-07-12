<?php

/**
 * Fonctions PDO de PHP pour accéder à la base de données 
 * http://php.net/manual/fr/book.pdo.php
 */
 
// Connexion à une base de données 
$pdo = new PDO('mysql:host=localhost;dbname=nom_base_donnees;charset=utf8', 'utilisateur', 'password');

// Requête simple
$resultat = $pdo->query('SELECT * FROM products');
$produits = $resultat->fetchAll();

// Requête préparée (ou paramétrée)
$prepare = $pdo->prepare('SELECT * FROM products');
$prepare->execute();
$produits = $prepare->fetchAll();

// Requête préparée avec paramètres non nommés
$prepare = $pdo->prepare('INSERT INTO products (title, description, price) VALUES (?, ?, ?)');
$prepare->execute(['Mon titre', 'Ma description', 50]);

// Requête préparée avec paramètres nommés 
$prepare = $pdo->prepare('INSERT INTO products (title, description, price) VALUES (:title, :description, :price)');
$prepare->execute([':title' => 'Mon titre', ':description' => 'Ma description', ':price' => 50]);

// Requête préparée avec "binding" de paramètres
$prepare = $pdo->prepare('INSERT INTO products (title, description, price) VALUES (:title, :description, :price)');
$title = "Mon titre";
$description = "Ma description";
$price = 30;

$prepare->bindParam(':title', $title);
$prepare->bindParam(':description', $description);
$prepare->bindParam(':price', $price);
$prepare->execute(); // insere la ligne avec les données "bindées"
$title = "Mon deuxième titre";
$description = "Ma deuxième description";
$price = 50;
$prepare->execute(); // insère une deuxième ligne avec les données qui ont changé entre temps !

// Récupération du dernier ID inséré après une insertion
$lastId = $pdo->lastInsertId();
