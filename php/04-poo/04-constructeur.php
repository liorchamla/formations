<?php
/**
 * Ici, nous allons voir qu'un constructeur peut recevoir des paramètres ! La plupart du temps, les paramètres
 * demandés par le constructeur sont les valeurs que l'on veut donner aux attributs de l'objet (pas toujours mais souvent)
 *
 * Créons ici une classe Personne avec un constructeur qui accèpte 3 paramètres qui correspondent aux 3 propriétés de la classe :
 */
class Personne {
  public $prenom;
  public $nom;
  public $age;

  public function __construct($prenom, $nom, $age){
    /**
     * Nous obtenons donc 3 paramètres que nous voulons assigner à nos propriétés :
     *
     * Ici, je dis que le prénom de l'objet est égal au prénom qu'on m'a envoyé
     */
    $this->prenom = $prenom;
    /**
     * Ici je dis que le nom de l'objet est égal au nom qu'on m'a envoyé
     */
    $this->nom = $nom;
    /**
     * Ici je dis que l'age de l'objet est égal à l'age qu'on m'a envoyé
     */
    $this->age = $age;
  }

  public function presentation(){
    return "Bonjour je m'appelle $this->prenom $this->nom et j'ai $this->age ans !";
  }
}
/**
 * Créons un objet $formateur issu de la classe Personne en lui passant directement les paramètres
 */
$formateur = new Personne("Lior", "Chamla", 30);
/**
 * Affichons le contenu de la variable $formateur
 */
var_dump($formateur);
/**
 * Affichons le retour de la fonction presentation()
 */
echo $formateur->presentation();
/**
 * A VOUS !
 * 1) Créez une variable $moi qui est issue de la classe Personne en lui donnant en paramètre votre prénom, votre nom et votre âge
 */

/**
 * 2) Affichez le contenu de la variable $moi
 */

/**
 * 3) Affichez le retour de la fonction presentation() de la variable $moi
 */

/**
 * 4) Comprenez bien que le constructeur ne fige pas les valeurs des propriétés ! Vous avez tout le loisir de redefinir ces propriétés par vous même !
 * Changez le prénom et le nom de la variable $moi ($moi->prenom = ...)
 */

/**
 * 5) Affichez le contenu de la variable $moi
 */

/**
 * 6) Affichez le retour de la fonction presentation() de la variable $moi
 */

?>
