<?php

// Connexion à MySQL grâce à PDO
$db = new PDO('mysql:host=localhost;dbname=ajaxcontacts;charset=utf8', 'liorchamla', '');

// Création de la requête
$statement = $db->query('SELECT * FROM contacts');

// Récupération des données
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

/**
 * Désormais, je passe à l'affichage en HTML de mes contacts qui seront représentés par des <li> au sein d'un <ul>
 */
?>
<ul>
    <!-- Pour chaque contact dans le tableau des contacts -->
    <?php foreach($contacts as $contact) : ?>
        <!-- Je créé un <li> -->
        <li><?php echo $contact['firstName'] . ' ' . $contact['lastName'] . ' ' . $contact['phoneNumber'] ?></li>
    <?php endforeach; ?>
</ul>