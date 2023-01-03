<?php

/**
 * Syntaxe de base de PHP à retrouver en intégralité ici (avec exemples) :
 * http://php.net/manual/fr/language.basic-syntax.php
 */


// Commentaire sur une ligne

/**
 * Commentaire
 * sur plusieurs
 * lignes
 */

// Déclaration d'une variable
$variable = "Hello !";

// Déclaration d'un tableau 
$tableau = array(10, 20, 30);
// ou
$tableau = [10, 20, 30];

// Déclaration d'un tableau avec clés 
$tableau = array("nom" => "Chamla", "prenom" => "Lior", "age" => 30);
// ou
$tableau = ["nom" => "Chamla", "prenom" => "Lior", "age" => 30];

// Condition if / elseif / else
if($x == 3 || $y == 2){
	//
} elseif($x == 2 && $y == 3){
	//
} else {
	//
}

// Switch
switch ($prenom) {
	case 'Lior':
		//
		break;
	case 'Magali':
		// 
		break;
	default:
		//
		break;
}

// Boucle for classique
for($i = 0; $i < count($tableau); $i++){
	//
}

// Boucle foreach classique
foreach($tableau as $element){
	// Pour chaque élément du tableau (on appelle $element l'élément en cours)
}

// Boucle foreach avec clés 
foreach($tableau as $key => $element){
	// Pour chaque couple $key => $element du tableau ($key est la clé en cours, $element est l'élément en cours)
}

// Boucle while
while($x < 10){
	//
}

// Boucle do while
do {
	//
} while ($x <= 10);

// Déclaration d'une fonction
function additionner($x, $y){
	$resultat = $x + $y;
	return $resultat
}

// Utilisation d'une fonction
$somme = additionner(2, 3); // $somme = 5

