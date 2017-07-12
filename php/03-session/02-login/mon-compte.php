<?php
/**
 * Attention, on compte utiliser la variable $_SESSION, il faut donc avant tout
 * lancer la fonction session_start() !
 */
session_start();
/**
 * A partir de maintenant, la $_SESSION est utilisable ! On peut donc voir les données
 * qui s'y trouvent
 */
?>
<h1>Mon compte !</h1>
<!-- Si la variable user en session n'est pas nulle, la personne est connectée -->
<?php if($_SESSION['user'] !== null): ?>
    <p>Vous êtes bien connecté !</p>
    <p>Vous vous appelez : <?= $_SESSION['user']['firstName'] ?> <?= $_SESSION['user']['lastName'] ?></p>
    <a href="index.php?action=disconnect">Déconnexion ?</a>
<!-- Sinon, la personne n'est pas connectée -->
<?php else: ?>
    <p>Vous n'êtes pas connecté !</p>
    <a href="index.php?action=login">Connexion !</a>
<?php endif; ?>