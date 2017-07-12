<?php
/**
 * Youhou ! Créons des fonctions qui prennent des paramètres avec des valeurs par défaut !
 */
 
/**
 * 1) Créez une fonction afficherTitre() qui prend en paramètre :
 * - $phrase qui représente le titre à afficher
 * - $type qui représente le type de titre à afficher (h1, h2 ou h3) et qui par défaut vaut "h1"
 * Elle affiche la $phrase entre deux balises qu'on choisi en fonction du type.
 * 
 * Par exemple : afficherTitre("Bonjour", "h2") doit afficher <h2>Bonjour</h2>
 * Par exemple : afficherTitre("Salut") doit afficher <h1>Salut</h1>
 */

/**
 * 2) Appelez la fonction afficherTitre en lui donnant comme phrase "Bienvenue !" et comme type "h3"
 */

/**
 * 3) Créez une variable $titre qui contient "Mon titre magnifique"
 */
 
/**
 * 4) Appelez la fonction afficherTitre en lui donnant en paramètre votre variable $titre et ne donnez pas de deuxième paramètre
 * Ca devrait afficher "<h1>Mon titre magnifique</h1>"
 */
 
/**
 * 5) Faisons maintenant une fonction calculMontants() qui reçoit deux paramètres
 * - $montantHT qui représente un montant HT
 * - $tauxTVA qui représente le taux de TVA souhaité et qui contient par défaut 0.2 (20%)
 * La fonction va renvoyer un tableau qui contient :
 * - "montantHT" => le montant HT
 * - "montantTVA" => le montant de la TVA ($montantHT * $tauxTVA)
 * - "montantTTC" => le montant HT + le montant de la TVA
 */

/**
 * 6) Appelons la fonction en lui passant en premier paramètre 100 et en deuxième paramètre 0.1 (10% de tva)
 * affichons avec var_dump le résultat qui devrait être un tableau tel que :
 * "montantHT" => 100,
 * "montantTVA" => 10,
 * "montantTTC" => 110
 */

/**
 * 7) Appelons la fonction en lui passant simplement 200
 * affichons avec var_dump le résultat qui devrait être un tableau tel que :
 * "montantHT" => 200,
 * "montantTVA" => 40,
 * "montantTTC" => 240
 * Oui, vous avez compris, puisqu'on ne passe pas de deuxième paramètre, c'est un taux de 0,2 (20%) qui 
 * est pris par défaut !
 */