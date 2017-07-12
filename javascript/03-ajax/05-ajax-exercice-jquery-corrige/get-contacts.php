<?php
// Connexion à MySQL grâce à PDO
$db = new PDO('mysql:host=localhost;dbname=ajaxcontacts;charset=utf8', 'liorchamla', '');

// Création de la requête
$statement = $db->query('SELECT * FROM contacts');

// Récupération des données
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

// J'affiche le résultat en JSON
echo json_encode($contacts);

?>