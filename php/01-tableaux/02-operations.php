<?php

// Eleves
$eleves = array(
  "Djamel", "Cristian", "Claire"  
);
var_dump($eleves); // Djamel, Cristian, Claire

// Inversion :
$eleves = array_reverse($eleves);
var_dump($eleves); // Claire, Cristian, Djamel

// Compte :
$nombre = count($eleves);
var_dump($nombre); // 3

// Ajout "classique"
array_push($eleves, "Anneline");
var_dump($eleves); // Claire, Cristian, Djamel, Anneline

// Ajout "simplifié"
$eleves[] = "Soumia";
var_dump($eleves); // Claire, Cristian, Djamel, Anneline, Soumia

// Attraper le dernier élement
$dernier = array_pop($eleves);
var_dump($dernier); // Soumia
var_dump($eleves); // Claire, Cristian, Djamel, Anneline

// Attraper le premier élément
$premier = array_shift($eleves);
var_dump($premier); // Claire
var_dump($eleves); // Cristian, Djamel, Anneline

// Boucle while sur un tableau qui se vide au fur et à mesure
while(count($eleves) > 0){
    $eleve = array_shift($eleves);
    var_dump($eleve);
}
var_dump($eleves); // []

?>