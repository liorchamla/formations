<?php
/**
 * Nous avons vu que nous pouvions protéger des données grâce au phénomène d'ENCAPSULATION. Cela passe par les différents MODIFICATEURS (public, private, protected)
 *
 * Mais alors que faire lorsque l'on souhaite qu'une donnée soit privée, mais qu'on puisse tout de même y accéder sous certaines conditions ?
 *
 * On utilise ce qu'on appelle des ACCESSEURS ! Ils nous aident à ACCEDER à des données protégées tout en vérifiant que toutes les conditions sont remplies !
 *
 * Créons ENCORE une classe Personne avec nom, prénom et âge
 */
class Personne {
  public $prenom;
  public $nom;
  /**
   * Disons que l'âge est privé, et qu'on ne peut pas le changer comme on le souhaite
   */
  private $age;

  public function __construct($prenom, $nom, $age){
    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->age = $age;
  }

  /**
   * Nous créons ici un accesseur qui permet de récupérer la valeur de l'âge si on veut
   */
  public function getAge(){
    /**
     * On nous demande l'age de la personne ? Ok ben on retourne l'age de la personne
     */
    return $this->age;
  }

  /**
   * Nous créons ici un accesseur qui permet de modifier l'âge de la personne si on veut
   */
  public function setAge($age){
    /**
     * Si l'age passé en paramètre nous semble cohérent (qu'il est supérieur à 0 et qu'il est inférieur à 120)
     */
    if($age > 0 && $age < 120){
      /**
       * Alors on veut bien dire que l'âge de l'objet sera modifié
       */
      $this->age = $age;
    } else {
      /**
       * Sinon, on prévient le mec qu'il délire.
       */
      echo "L'age que vous avez donné ($age) est impossible !";
      /**
       * Et on renvoie false, histoire de bien confirmer que NON, tu ne changeras pas l'âge mon gars.
       */
      return false;
    }
  }
}

/**
 * Créons un objet $formateur issu de la classe Personne
 */
$formateur = new Personne("Lior", "Chamla", 30);
var_dump($formateur);
/**
 * Modifions allègrement le nom et le prénom du formateur
 */
$formateur->nom = "Dupont";
$formateur->prenom = "Joseph";
var_dump($formateur);
/**
 * Nous souhaitons modifier l'age du formateur, mais la donnée est privée, nous sommes donc obligés de passer par la fonction setAge()
 */
$formateur->setAge(25);
var_dump($formateur);
/**
 * On peut aussi afficher la valeur de l'age si on veut
 */
$ageDuFormateur = $formateur->getAge();
echo "L'age de la personne est $ageDuFormateur ans ! <br>";
/**
 * Reessayons mais avec un age délirant qui ne devrait jamais arriver
 */
$formateur->setAge(960);
var_dump($formateur); // L'age n'a pas changé, il reste à 25, car 960, dans le cadre de notre programme, c'est impossible.
?>
