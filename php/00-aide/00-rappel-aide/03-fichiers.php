<?php

/**
 * Fonctions sur les systèmes de fichier à voir en intégralité ici (avec exemples) :
 * http://php.net/manual/fr/ref.filesystem.php
 */

// Ouvrir un fichier 
$ressource = fopen("chemin/du/fichier.txt", "r");
// Modes d'ouverture d'un fichier
// 'r'	Ouvre en lecture seule, et place le pointeur de fichier au début du fichier.
// 'r+'	Ouvre en lecture et écriture, et place le pointeur de fichier au début du fichier.
// 'w'	Ouvre en écriture seule ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
// 'w+'	Ouvre en lecture et écriture ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
// 'a'	Ouvre en écriture seule ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'a aucun effet, les écritures surviennent toujours.
// 'a+'	Ouvre en lecture et écriture ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'affecte que la position de lecture, les écritures surviennent toujours.

// Fermer un fichier 
fclose($ressource);

// Lire une ligne CSV dans un fichier et renvoi les données sous forme de tableau
$ligne = fgetcsv($fichier);

// Lire l'ensemble des lignes d'un fichier CSV
$lignes = [];
while($ligneActuelle = fgetcsv($fichier)){
	$lignes[] = $ligneActuelle;
	// ou array_push($lignes, $ligneActuelle);
}

// Ecrire une ligne CSV dans un fichier
$tableau = [
	"nom" => "Chamla",
	"prenom" => "Lior",
	"age" => 30
];
fputcsv($fichier, $tableau);

// Ecrire un ensemble de lignes dans un fichier CSV

// Pour chaque élément d'un tableau (en imaginant que chaque élément est lui-même un tableau)
foreach($tableau as $eleve){
	fputcsv($fichier, $eleve)
	// Ecrit le tableau $eleve comme une ligne CSV dans le fichier
}

?>