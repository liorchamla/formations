<?php
/**
 * Etudions plus en détail les méthodes (comportements ou opérations des objets)
 */
class Personne {
  /**
   * Tous les attributs de l'objet sont privés, intouchables de l'exterieur
   */
  private $prenom;
  private $nom;
  private $age;

  /**
   * On créé un accesseur pour modifier le nom
   */
  public function setNom($nom){
    /**
     * On veut absolument que le nom de la personne soit en majuscules
     */
    $this->nom = strtoupper($nom);
  }

  /**
   * On créé un accesseur pour modifier le prénom
   */
  public function setPrenom($prenom){
    /**
     * On veut absolument que le prénom ait sa première lettre en majuscule
     */
    $this->prenom = ucfirst($prenom);
  }

  /**
   * On créé un accesseur pour modifier l'age
   */
  public function setAge($age){
    $this->age = $age;
  }

  private function convertAgeToMonths(){
    return $this->age * 12;
  }

  /**
   * Constructeur
   */
  public function __construct($prenom, $nom, $age){
    /**
     * Nous pouvons appeler des méthodes de notre objet au sein d'autres méthodes !
     * Ici, au sein de la fonction constructeur, j'appelle d'autres fonctions de l'objet (setNom, setPrenom etc)
     */
    $this->setPrenom($prenom);
    $this->setNom($nom);
    $this->setAge($age);
  }

  public function presentation(){
    return "En mois, j'ai " . $this->convertAgeToMonths() . " mois !<br>";
  }

}
/**
 * Créons un objet $formateur issu de la classe Personne, remarquez bien : je lui passe des paramètres tout en minuscules
 */
$formateur = new Personne("lior", "chamla", 30);
var_dump($formateur); // On voit bien que les données passées à la Personne ont été bien formatées !
/**
 * Modifions le prénom et le nom
 */
$formateur->setPrenom("joseph");
$formateur->setNom('un nom compose');
var_dump($formateur);

echo $formateur->presentation();

/**
 * Evidemment, ce qu'on voit ici c'est que les accesseurs permettent de modifier les données envoyées avant de les stocker dans l'objet
 * Mais on voit aussi que les méthodes de l'objets peuvent s'appeler les unes et les autres (ici dans le constructeur).
 */
