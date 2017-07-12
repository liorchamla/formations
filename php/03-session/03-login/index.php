<?php
/**
 * Nous allons utiliser les sessions, il faut donc lancer la session
 */
session_start();

var_dump($_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon site classique</title>
</head>
<body>
    <h1>Connecté ou pas connecté ;-)</h1>
    <?php if($_SESSION['logged'] == false) : ?>
        <form action="connexion.php" method="post">
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Mot de passe"/>
            <button type="submit">Connexion</button>
        </form>
    <?php else : ?>
        <a href="deconnexion.php">Déconnexion</a>
    <?php endif; ?>
</body>
</html>