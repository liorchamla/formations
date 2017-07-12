<?php
/**
 * Voilà ici notre premier vrai model ! Il doit hériter de la classe Model (voir fichier 01-Model.php) et il ajoutera des fonctions spécifiques à la gestion des articles !
 */

/**
 * 1) Commencez par dire que vous avez besoin du fichier 01-Model.php en utilisant la fonction require_once() de PHP (voir http://php.net/manual/fr/function.require-once.php) 
 */

/**
 * 2) Créez une classe ArticlesModel qui hérite de la classe Model
 */

	/**
	 * 3) Créez une fonction publique index() qui va envoyer une requête à la base de données pour récupérer l'ensemble des articles ainsi que le nom et prénom de l'auteur et le titre de la catégorie (comme c'est original ...)
	 *
	 * INDICE : N'oubliez pas, comme vous héritez de la classe Model, vous avez accès à une propriété $this->db qui est un objet PDO déjà fonctionnel, vous pouvez donc utiliser sur $this->db la fonction query() par exemple.
	 *
	 * ATTENTION : La fonction index() que vous allez créer doit renvoyer un tableau contenant tous les articles (utilisez la méthode fetchAll())
	 */


	/**
	 * 4) Créez une fonction publique find() qui prend en paramètre un identifiant ($id) d'article, qui fait la requête à la base de données pour retrouver cet article (UTILISEZ LA CLAUSE WHERE !)
	 * 
	 * INDICE : N'oubliez pas, comme vous héritez de la classe Model, vous avez accès à une propriété $this->db qui est un objet PDO déjà fonctionnel, vous pouvez donc utiliser sur $this->db la fonction query() par exemple.
	 *
	 * ATTENTION : La fonction find($id) que vous allez créer doit renvoyer un seul article, utilisez la méthode fetch()
	 */
	
}


?>