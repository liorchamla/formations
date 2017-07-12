<?php
/**
 * Dans ce fichier, nous allons disposer un formulaire de connexion si la personne n'est pas connectée
 * et dans le cas contraire nous disposons un lien "Déconnexion"
 * 
 * Comme on souhaite utiliser les sessions, nous devons utiliser session_start()
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon site avec login</title>
</head>
<body>
    <h1>Connecté ou pas ? ;-)</h1>
    <?php if($_SESSION['connecte'] == false) : ?>
        <form action="connexion.php" method="post">
            <input type="text" name="username" placeholder="Votre login"><br>
            <input type="password" name="password" placeholder="Votre mot de passe"><br>
            <button type="submit">Connexion !</button>
        </form>
    <?php else: ?>
        <h2>Bonjour chèr(e) <?= $_SESSION['user']['firstname'] ?></h2>
        <a href="deconnexion.php">Déconnexion</a>
    <?php endif; ?>
</body>
</html>
