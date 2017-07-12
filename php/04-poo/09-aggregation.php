<?php
/**
 * Nous connaissons désormais les bases de la création de classe et de l'utilisation d'un objet. Mais qu'en est-il lorsque l'on veut représenter par exemple, le fait qu'une personne possède une voiture ?
 *
 * Créons une classe Voiture avec les propriétés marque, couleur et kilométrage
 */
class Voiture {
  private $marque;
  private $couleur;
  private $kilometrage;

  /**
   * Constructeur de la voiture
   */
  public function __construct($marque, $couleur, $kilometrage){
    $this->marque = $marque;
    $this->couleur = $couleur;
    $this->kilometrage = $kilometrage;
  }

  /**
   * Créons maintenant les accesseurs pour chacune des propriété de la classe
   */
  public function getMarque(){
    return $this->marque;
  }

  public function setMarque($marque){
    $this->marque = $marque;
  }

  public function getCouleur(){
    return $this->couleur;
  }

  public function setCouleur($couleur){
    $this->couleur = $couleur;
  }

  public function getKilometrage(){
    return $this->kilometrage;
  }

  public function setKilometrage($km){
    $this->kilometrage = $km;
  }

  /**
   * Cette fonction est un accesseur un peu particulier, elle nous permet d'AJOUTER des kms ;-)
   * A ne pas confondre avec setKilometrage() qui permet de CHANGER les kms
   */
  public function addKilometrage($km){
    $this->kilometrage += $km;
  }
}

/**
 * Créons maintenant une classe Personne avec les propriétés nom, prénom et voiture !
 */
class Personne {
  private $nom;
  private $prenom;
  private $voiture;

  public function __construct($nom, $prenom, $voiture){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->voiture = $voiture;
  }

  public function getVoiture(){
    return $this->voiture;
  }

  /**
   * Créons une fonction presnetation qui retourne une phrase de présentation de la personne ET de la voiture de la personne ;-)
   */
  public function presentation(){
    return "Bonjour, je m'appelle $this->prenom $this->nom et ma voiture est une $this->voiture->getMarque() de couleur $this->voiture->getCouleur() avec $this->voiture->getKilometrage() kms !";
  }
}

/**
 * Créons un objet $voiture issu de la classe Voiture
 */
$voiture = new Voiture('Hyundai I30', 'grise', 20000);
/**
 * Créons maintenant un objet $formateur issu de la classe Personne
 */
$formateur = new Personne("Lior", "Chamla", $voiture); // Vous voyez, on donne la voiture en paramètre du constructeur de la personne !
/**
 * Affichons le contenu de la variable $formateur
 */
var_dump($formateur);
/**
 * On peut donc accéder aussi aux données de la voiture du conducteur !
 * Par exemple, imaginons que le formateur roule pour aller en cours, sa voiture va voir son kilométrage augmenter
 */
$formateur->getVoiture()->setKilometrage(21000);
var_dump($formateur);
/**
 * On aurait aussi pu se servir de la fonction addKilometrage de la voiture
 */
$formateur->getVoiture()->addKilometrage(20); // Remarquez qu'on chaine les instructions ! getVoiture() donne accès à la voiture, et donc à sa fonction addKilometrage !
var_dump($formateur);

?>
