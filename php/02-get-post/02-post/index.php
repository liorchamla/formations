<?php
/**
 * Apprenons à utiliser la globale $_POST
 * 
 * Elle contient l'ensemble des données envoyées en POST (la plupart du temps par un formulaire)
 * Le nom des données contenues dans $_POST correspond aux attributs "name" données
 * dans le formulaire HTML
 * 
 * Ce var_dump doit afficher les données du formulaire, une fois celui-ci envoyé
 */
var_dump($_POST);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon formulaire</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="prenom" placeholder="Votre prénom"/>
        <textarea name="adresse" cols="30" rows="10" placeholder="Votre adresse"></textarea>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>