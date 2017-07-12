<?php
/**
 * Créons notre premier Framework MVC (Model View Controller) !
 *
 * Un Framework MVC se sert de Controleurs pour controler les requêtes des utilisateurs et y répondre
 * Il se sert aussi de Models pour intéragir avec la source de données et enfin, il se sert de Vues pour afficher les pages demandées par les utilisateurs
 */

/**
 * La première chose est donc d'inclure le fichier qui contient notre controller
 */
require_once '03-ArticlesController.php';

/**
 * Le controlleur doit savoir quelle tâche il souhaite accomplir, par défaut, la tâche sera "liste", c'est la tâche de notre controlleur qui affichera la liste des articles
 *
 * Attention, cette tâche pourrait changer, en fonction de ce qui est demandé par l'utilisateur
 */
$task = "liste";

/**
 * Si jamais, dans l'URL, l'utilisateur demande une autre tâche que la tâche par défaut, nous changeons la tâche liste par la tâche demandée par l'utilisateur
 */
if(array_key_exists('task', $_GET)){
	$task = $_GET['task'];
}

/**
 * Nous créons une instance de notre controller (ArticlesController)
 */
$controller = new ArticlesController();

/**
 * En fonction de la tâche demandée par l'utilisateur, on va appeler une ou l'autre fonction du controller 
 */
switch ($task) {
	case 'liste':
		// Si c'est la tâche liste qui est demandée, on demande la fonction index() du controlleur
		$controller->index();
		break;
	case 'lire':
		// Si c'est la tâche lire qui est demandée, on demande la fonction lire() du controlleur
		$controller->lire();
		break;
}