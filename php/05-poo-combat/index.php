<?php

require_once 'chevalier.php';
require_once 'soigneur.php';
require_once 'mage.php';

session_start();

if(array_key_exists('heros', $_SESSION) === false){
    $_SESSION['heros'] = array(
      "arthur"   => new Chevalier("Arthur"),
      "lancelot" => new Chevalier("Lancelot"),
      "gauvin"   => new Soigneur("Gauvin"),
      "illias"   => new Mage("Illias de Kelliwick")
    );
}

$arthur   = $_SESSION['heros']['arthur'];
$lancelot = $_SESSION['heros']['lancelot'];
$gauvin   = $_SESSION['heros']['gauvin'];
$illias   = $_SESSION['heros']['illias'];

if(array_key_exists('arthur_frappe_lancelot', $_POST)){
    $arthur->frapper($lancelot);
} else if(array_key_exists('gauvin_soigne_arthur', $_POST)){
    $gauvin->soigner($arthur);
} else if(array_key_exists('arthur_frappe_illias', $_POST)){
    $arthur->frapper($illias);
} else if(array_key_exists('lancelot_frappe_arthur', $_POST)){
    $lancelot->frapper($arthur);
} else if(array_key_exists('lancelot_frappe_gauvin', $_POST)){
    $lancelot->frapper($gauvin);
} else if(array_key_exists('illias_frappe_arthur', $_POST)){
    $illias->frapper($arthur);
} else if(array_key_exists('illias_frappe_gauvin', $_POST)){
    $illias->frapper($gauvin);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jeu des héros !</title>
</head>
<body>
    <h1>Le jeu des héros !</h1>
    <p>A gauche, notre roi bien aimé Arthur, accompagné de Gauvin le soigneur, à droite, Lancelot et Illias de Kelliwick, les deux saligauds !</p>
    
    <form action="" method="post">
        <div id="arthur">
            <h2>Arthur</h2>
            <p>Points de vie : <?= $arthur->getPV() ?></p>
            <p>Points d'attaque : <?= $arthur->getPA() ?></p>
            <button type="submit" name="arthur_frappe_lancelot">Frapper Lancelot</button>
            <button type="submit" name="arthur_frappe_illias">Frapper Illias</button>
            
            <h2>Gauvin</h2>
            <p>Points de vie : <?= $gauvin->getPV() ?></p>
            <p>Points d'attaque : <?= $gauvin->getPA() ?></p>
            <button type="submit" name="gauvin_soigne_arthur">Soigner Arthur</button>
        </div>
        
        <div id="lancelot">
            <h2>Lancelot</h2>
            <p>Points de vie : <?= $lancelot->getPV() ?></p>
            <p>Points d'attaque : <?= $lancelot->getPA() ?></p>
            <button type="submit" name="lancelot_frappe_arthur">Frapper Arthur</button>
            <button type="submit" name="lancelot_frappe_gauvin">Frapper Gauvin</button>
            
            <h2>Illias</h2>
            <p>Points de vie : <?= $illias->getPV() ?></p>
            <p>Points d'attaque : <?= $illias->getPA() ?></p>
            <button type="submit" name="illias_frappe_arthur">Frapper Arthur</button>
            <button type="submit" name="illias_frappe_gauvin">Frapper Gauvin</button>
        </div>
    </form>
</body>
</html>