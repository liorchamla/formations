<?php
/**
 * Pour permettre à une fonction de recevoir des paramètres
 * il faut les préciser à l'intérieur des parenthèses au moment où 
 * on définit la fonction (et oui, vous ne pensiez pas que ces parenthèses
 * ne servaient à rien tout de même ?)
 * 
 * On écrit :
 * - le traditionnel mot clé FUNCTION
 * - le nom de la fonction
 * - les parenthèses avec les paramètres séparés par des "," (virgules)
 * - les accolades et le code à exécuter
 */
 
/**
 * Créons / définissons une fonction qui s'appelle additionner et qui prend
 * deux paramètres : 
 * - $nombre1, qui représente un nombre
 * - $nombre2, qui représente un autre nombre !
 * 
 * La fonction affiche l'addition des deux nombres !
 */
function additionner($nombre1, $nombre2){
    echo $nombre1 + $nombre2;
}
/**
 * Du coup, on peut appeler la fonction !
 */
additionner(100, 250); // affichera 350

echo "<br>"; // allons à la ligne

/**
 * A vous !
 * 1) Créez / définissez une fonction qui s'appelle "multiplier"
 * Elle reçoit deux paramètres :
 * - $nombre1  qui représente le premier nombre
 * - $nombre2 qui représente le deuxième
 * Elle affiche le résultat de la multiplication des deux nombres
 */

/**
 * 2) Appelez votre fonction multiplier() en lui passant deux nombres de votre choix
 * Si elle affiche le bon résultat sur l'écran, alors on est bon !
 */
 
/**
 * 3) Créez deux variables $x = 2 et $y = 21
 */
 
/**
 * 4) Appelez votre fonction multiplier() en lui passant $x et $y comme paramètres
 * Si la page affiche 42 (2x21), c'est ok !
 */