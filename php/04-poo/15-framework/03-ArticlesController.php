<?php
/**
 * Nous allons créer ici notre premier controller !
 *
 * Un controller est un objet qui va analyser la requete de l'utilisateur et en déduire des actions à mener.
 *
 * Son travail consiste à demander au model les données qui lui sont nécessaires (ou à passer au model les modifications à effectuer sur la base de données) puis à afficher la vue qui correspond à l'action demandée par l'utilisateur !
 *
 * Comme notre controller nécessite de parler avec le model des articles nous devons commencer par l'inclure
 */

/**
 * 1) Grâce à la fonction require_once(), faites appel au fichier 02-ArticlesModel.php afin d'avoir accès au code qui y est écrit
 */

/**
 * 2) Créez la classe ArticlesController
 */

	/**
	 * 3) Créez une propriété publique qui s'appelle $model et qui va représenter le model dont va se servir notre controller à chaque fois qu'il en aura besoin
	 */
	
	/**
	 * 4) Créez un constructeur qui ne reçoit aucun paramètre
	 * Stockez dans la propriété $model (donc $this->model) une nouelle instance de la classe ArticlesModel (new ArticlesModel())
	 *
	 * Ainsi, dès sa construction, le controller pourra bénéficier du model des articles et de ses fonctions
	 */

	/**
	 * 5) Créez une fonction index() qui ne reçoit aucun commentaire et qui va permettre d'afficher la liste des articles
	 * Cette fonction va stocker dans une variable $articles le retour de la fonction index() du model ($this->model->index())
	 *
	 * Une fois qu'on a récupéré les articles dans la variable $articles, on va appeler la fonction showView du controller (donc $this->showView()) en lui passant en paramètres
	 * - Le nom de la vue (01-index) sans mentionner l'extension ".phtml" ni le dossier, juste le nom de la vue
	 * - Un tableau qui contient deux éléments : ['articles' => $articles, 'pageTitle' => 'Liste des articles']
	 */

	/**
	 * 6) Créez une fonction lire() qui ne prend aucun paramètre et qui servira à afficher un seul article
	 * 
	 * Cette fonction doit :
	 * - vérifier qu'il existe dans le tableau $_GET un élément 'article' grâce à la fonction empty() : if(!empty($_GET['article']))
	 * - si il existe bien un element article dans le $_GET
	 * -- récupérer dans la variable $article le retour dela fonction find du model ($this->model->find($_GET['article']))
	 * -- appeler la fonction showView en lui passant 2 paramètres : le nom de la vue (02-lire) sans l'extension .phtml, et un tableau contenant les données à afficher (['article' => $article, 'pageTitle' => $article['titre']])
	 * - sinon, si il n'existe pas d'élément article dans le $_GET
	 * -- appeler la fonction showError ($this->showError()) en lui passant en paramètre le message d'erreur "Aucun article n'a été trouvé !"
	 */
	

	/**
	 * 7) Voici la fonction showView(). 
	 *
	 * Elle reçoit deux paramètres : le nom de la vue (sans l'extension .phtml) et les variables qui serviront à l'intérieur de la vue
	 *
	 * Elle va rendre disponible les variables qui se trouvent dans le tableau $variables grâce à la fonction extract() (voir http://php.net/manual/fr/function.extract.php) et va inclure le header, la vue en question et le footer
	 */
	public function showView($viewName, $variables){
		extract($variables);
		include('views/00-header.phtml');
		include('views/' . $viewName . '.phtml');
		include('views/00-footer.phtml');
	}

	/**
	 * 8) Voici la fonction showError(). 
	 *
	 * Elle reçoit un seul paramètre : le message d'erreur à afficher
	 *
	 * Elle va simplement afficher la vue d'erreur en affichant le message passé en paramètres
	 */
	public function showError($message){
		$this->showView('00-404', ['message' => $message]);
	}
}
?>