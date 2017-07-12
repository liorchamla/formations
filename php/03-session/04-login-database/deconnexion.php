<?php
/**
 * Ce fichier nous permet de gérer la déconnexion d'un utilisateur
 */
session_start();

// On met l'élément user à null
$_SESSION['user'] = null;
// On met l'élément connecté à false
$_SESSION['connecte'] = false;

// On redirige sur l'index :-)
header('Location: index.php');
?>