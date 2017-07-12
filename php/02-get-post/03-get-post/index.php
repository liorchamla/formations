<?php
/**
 * On peut maintenant voir comment mixer les deux globales
 * 
 * Ici on va utiliser à la fois le GET (pour récupérer l'opération à faire)
 * et le POST pour récupérer les informations du formulaire
 */
var_dump($_GET);
var_dump($_POST);

// Si il y a une opération dans le GET, et que cette opération est "addition"
if(array_key_exists('operation', $_GET) && $_GET['operation'] == "addition"){
    // On affiche l'addition de x et y (informations du formulaire en POST)
    var_dump($_POST['x'] + $_POST['y']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mon formulaire</title>
</head>
<body>
    <form action="?operation=addition" method="post">
        <input type="text" name="x" placeholder="Premier nombre">
        <input type="text" name="y" placeholder="Deuxième nombre">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>