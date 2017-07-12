<?php
/**
 * Nous lançons la session pour pouvoir nous en servir ! PHP va maintenant se souvenir de tout ce que l'on fait
 * dans le tableau $_SESSION !
 */
session_start();

/**
 * Si il existe une information "action" dans le tableau $_GET et que cette information
 * vaut "increment", alors on incrémente le X
 */
if(array_key_exists('action', $_GET) && $_GET['action'] == "increment"){
    $_SESSION['x']++;
} 

?>
<h1>Le X en session vaut : <?= $_SESSION['x'] ?></h1>

<a href="compteur.php?action=increment">Incrémenter X de 1 !</a>
<a href="compteur.php">Revoir X sans incrémenter</a>