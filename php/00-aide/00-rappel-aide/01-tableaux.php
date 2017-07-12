<?php

/**
 * Fonctions sur tableaux à voir en intégralité ici (avec exemples) :
 * http://php.net/manual/fr/language.types.array.php
 * et
 * http://php.net/manual/fr/ref.array.php
 */

// Déclaration d'un tableau 
$tableau = array(10, 20, 30);
// ou
$tableau = [10, 20, 30];

// Déclaration d'un tableau avec clés 
$tableau = array("nom" => "Chamla", "prenom" => "Lior", "age" => 30);
// ou
$tableau = ["nom" => "Chamla", "prenom" => "Lior", "age" => 30];

// Compter le nombre d'éléments dans un tableau
count($tableau); // retourne un nombre

// Savoir si il existe une clé dans un tableau 
// retourne true si la clé existe ou false si elle n'existe pas
array_key_exists("clé", $tableau); 

// Savoir si une valeur existe dans un tableau
// retourne true si la valeur existe ou false si elle n'existe pas
in_array("valeur", $tableau);

// Connaitre la clé qui correspond à une valeur donnée 
// retourne la clé qui correspond si la valeur existe ou false si la valeur n'existe pas
array_search("valeur", $tableau);

// Ajouter un élément à la fin du tableau
array_push($tableau, "valeur");
// ou syntaxe simplifiée :
$tableau[] = "valeur";

// Retrouver la valeur qui correspond à une clé dans un tableau
// Retourne l'élément qui correspond à la clé dans le tableau
$tableau[$key]; 

// Boucle foreach classique
foreach($tableau as $element){
	// Pour chaque élément du tableau (on appelle $element l'élément en cours)
}

// Boucle foreach avec clés 
foreach($tableau as $key => $element){
	// Pour chaque coupe $key => $element du tableau ($key est la clé en cours, $element est l'élément en cours)
}
