<?php
/**
 * Etudions maintenant un nouvelle notion : les constructeurs !
 *
 * Vous devez comprendre que lorsque vous créez une variable qui est issue d'une classe (on dit que la variable est une INSTANCE de la CLASSE)
 * En fait, vous CONSTRUISEZ UN OBJET.
 *
 * Dans une classe, on peut SPECIFIER ce qu'il se passe lorsque plus tard, nous CONSTRUISONS UN OBJET ISSU DE CETTE CLASSE
 *
 * Imaginons une classe Personne qui représente une personne, elle a :
 * - un prénom
 * - un nom
 * - un âge
 *
 */
class Personne {
  public $prenom;
  public $nom;
  public $age;

  /**
   * Créons maintenant le CONSTRUCTEUR de la classe personne : il permet de dire ce qu'il se passe AU MOMENT OU UN OBJET SERA CREE A PARTIR DE CETTE CLASSE
   *
   * En PHP, la fonction qui représente le constructeur de la classe s'appelle "__construct". C'est une convention, vous n'avez pas à la discuter ;-)
   */
  public function __construct() {
    echo "Une personne vient de naître !";
  }
}

/**
 * A VOUS MAINTENANT :
 * 1) Créez un objet $formateur issu de la classe Personne grâce à l'opérateur "new" et regardez ce que cela donne dans votre page
 */

/**
 * 2) Créez une variable $moi qui est une instance de la classe Personne grâce à l'opérateur "new" et regardez ce que cela donne dans votre page
 */


/**
 * Vous avez compris : à chaque fois que vous construisez un objet issu d'une classe, le constructeur de la classe est appelé et fait les actions qui sont programmées pour l'occasion
 */
?>
