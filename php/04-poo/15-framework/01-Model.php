<?php
/**
 * Créons une classe abstraite Model
 */
abstract class Model {
	/**
	 * Le but de notre classe Model est de faire le lien avec la base de données et de permettre plus tard de récupérer des données, ou même d'en modifier, insérer ou supprimer !
	 *
	 * La seule propriété utile pour l'instant, c'est un lien avec la base de données.
	 *
	 * Tout le reste, on le laisse à la charge des classes qui hériteront du Model
	 *
	 * 1) Créons donc une propriété publique $db qui contiendra notre lien à PDO
	 */

	/**
	 * Créons maintenant un constructeur qui permettra de faire le lien avec la base de données
	 */
	public function __construct(){
		/**
		 * Faites en sorte de stockez un nouvel objet PDO dans la propriété $db !
		 */
	}
	/**
	 * Et c'est tout !
	 * Passez au model des articles (02)
	 */
}