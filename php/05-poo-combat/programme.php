<?php

require_once 'chevalier.php';
require_once 'soigneur.php';
require_once 'mage.php';

$hero1 = new Chevalier("Lancelot");
$hero2 = new Chevalier("Arthur");
$soigneur = new Soigneur("Gauvin");
$magicien = new Mage("Illias de Kelliwick");

$hero1->frapper($hero2);
$hero2->frapper($hero1);
$soigneur->soigner($hero2);
$magicien->frapper($hero2);
$hero1->frapper($soigneur);
$magicien->frapper($soigneur);
$hero1->frapper($soigneur);
$magicien->frapper($soigneur);

?>