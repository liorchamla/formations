<?php
/**
 * Dans ce fichier, nous découvrons quelque chose de très particulier mais aussi de très utile :
 * La CLASSE ! Outil primordial et indispensable de ce qu'on appelle la Programmation Orientée Objets (POO)
 *
 * Une classe est une structure complexe qui :
 * - porte un nom (le nom de la classe)
 * - spécifie des variables (les propriétés de la classe, ou les attributs)
 * - spéficie des comportements / fonctions (les méthodes de la classe)
 *
 * Spécifions ci-dessous une classe Personne qui représentera une personne de la vraie vie
 */
class Personne {
  /**
   * Spécifions désormais les attributs, propriétés d'une personne
   */
  public $prenom; // Toute personne a un prénom
  public $nom; // Toute personne a un nom
  public $age; // Toute personne a un âge

  /**
   * Spécifions désormais une méthode (fonction) qui permette à la personne de se présenter
   */
  public function presentation(){
    /**
     * Ici vous allez voir une variable un peu spéciale : $this ! Vous l'avez surement déjà vu en Javascript !
     * $this représente l'objet lui-même. Comprenez bien : $prenom et $this->prenom sont bel et bien 2 choses bien différentes !
     *
     * $this->prenom représente l'attribut $prenom que nous avons défini pour la classe. Alors que $prenom serait une autre variable qui n'a rien à voir
     *
     * Ici nous voulons afficher la valeur de l'attribut $prenom. Donc $this->prenom, et pareil pour le nom et pour l'âge :
     */
    return "Bonjour, je m'appelle $this->prenom $this->nom et j'ai $this->age ans !";
  }
}

/**
 * Nous venons de spécifier une classe Personne qui représente une personne.
 * ATTENTION : Une classe ne peut pas être utilisée telle quelle. Il nous faut désormais créer un OBJET qui soit issu de cette classe.
 * Une métaphore souvent utilisée est la suivante : la classe est un moule, l'objet qui est issu de la classe est le vase. En réalité, la classe spécifie la façon dont les objets qui seront calqués sur cette classe vont fonctionner
 *
 * Créons ici un objet issu de la classe personne (on appelle ça une INSTANCE)
 */
$formateur = new Personne();
/**
 * Nous disons que la variable $formateur est un objet issu de la classe Personne.
 * On peut même dire pour aller vite que nous créons une nouvelle personne dans la variable $formateur
 *
 * Affichons le contenu de cette variable
 */
var_dump($formateur);
/**
 * On voit bien que notre variable possède des "sous variables" (on appelle ça des PROPRIETES) qui pour l'instant ont tous la valeur "null" (il ne contiennent rien).
 *
 * Donnons donc des valeurs à ces propriétés grâce à l'opérateur "->". La flèche (->) nous permet d'accéder aux propriétés ou méthodes (fonctions) de l'objet (c'est un peu le "." de Javascript)
 */
$formateur->prenom = "Lior";
$formateur->nom = "Chamla";
$formateur->age = 30;
/**
 * Réaffichons désormais la variable afin de voir ce qu'il s'est produit
 */
var_dump($formateur);
/**
 * Appelons maintenant la méthode "presentation" de $formateur pour voir ce qu'il en est
 */
echo $formateur->presentation();

/**
 * 1) A VOUS ! Créez un nouvel objet Personne dans la variable $moi grâce à l'opérateur "new" (inspirez vous de ce que j'ai fait pour le $formateur un peu plus haut)
 */
$moi = new Personne();
/**
 * 2) Donnez à $moi votre prénom, votre nom et votre âge
 */
$moi->prenom = "Magali";
$moi->nom = "Pernin";
$moi->age = 30;
/**
 * 3) Affichez le retour de la méthode presentation() de l'objet $moi et vérifiez dans votre navigateur ce que cela donne
 */
echo $moi->presentation();

$djamel = new Personne();
$djamel->prenom = "Djamel";
$djamel->nom = "Ait Ammar";
$djamel->age = 46;
echo $djamel->presentation();
