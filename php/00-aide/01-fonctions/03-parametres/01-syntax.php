<?php
/**
 * Travaillons la syntaxe de ces paramètres par défaut !
 * 
 * Créons une fonction qui permet de faire des opérations mathématiques
 */
function operation($nombre1, $nombre2, $type = "addition"){
    switch($type){
        case "addition":
            return $nombre1 + $nombre2;
            break;
        case "soustraction":
            return $nombre1 - $nombre2;
            break;
        case "division":
            return $nombre1 / $nombre2;
            break;
        case "multiplication":
            return $nombre1 * $nombre2;
            break;
    }
}
/**
 * Vous l'avez remarqué, le paramètre $type a une valeur par défaut de "addition"
 * Ce qui veut dire que si on appelle la fonction operation() sans lui donner de type d'opération
 * elle fera toujours une ADDITION ! Et oui.
 */
$resultat = operation(2, 2, "multiplication"); // $resultat contient 4 (2*2)
var_dump($resultat);
$resultat = operation(4, 6); // si on ne définit pas de type d'opération, par défaut ce sera une addition !
var_dump($resultat); // affiche 10 (4+10)