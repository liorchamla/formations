<?php
/**
 * Voyons comment on peut créer une fonction qui retournera des informations
 * On utilisera :
 * - le traditionnel mot clé FUNCTION
 * - le nom de la fonction
 * - les parenthèses avec ou sans paramètres
 * - les accolades
 * - le code de la fonction et l'instruction de retour
 * - fin d'accolades
 */
 
/**
 * Créons une fonction multiplier() qui reçoit en paramètres
 * - $nombre1 qui représente le premier nombre
 * - $nombre2 qui représente le deuxième nombre
 * et qui renvoie la multiplication des deux nombres
 */
 function multiplier($nombre1, $nombre2){
     return $nombre1 * $nombre2;
 }
 
/**
 * Appelons la fonction
 */
$x = 10;
$y = 20;
$resultat = multiplier($x, $y);
echo "Le résultat est " . $resultat . "<br>";

/**
 * Testez ce fichier et voyez ce qu'il en sort !
 */

/**
 * A VOUS !
 * 1) Créez une fonction diviser() qui reçoit deux paramètres :
 * - $nombre1 
 * - $nombre2
 * et qui fait la division du premier par le deuxième et qui renvoie le résultat !
 */
 
/**
 * 2) Créez deux variables $x et $y et envoyez les à la fonction diviser() en récupérant le résultat dans une variable $resultat
 */
 
 /**
  * 3) Affichez une phrase qui dit "Le résultat de la division est " et concaténez le resultat obtenu
  */
 