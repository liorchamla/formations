<?php

/**
 * Etudions la variable globale $_GET qui contient l'ensemble des paramètres GET envoyés
 * à la page. Les paramètres GET sont visibles dans l'URL et s'écrivent tel que :
 * index.php?nomParametre=valeurParametre&nomParametre2=valeurParemetre2
 *
 * Le nom des informations dans le tableau $_GET est le même que le nom des paramètres dans 
 * l'URL
 *
 * Essayons donc d'appeler la page index.php en précisant des paramètres tel que :
 * index.php?nom=Dupont&prenom=Jerome
 * index.php?marque=Renault&couleur=Rouge
 * index.php?x=20&y=40&operation=multiplication
 */ 
var_dump($_GET);

?>