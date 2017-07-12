<?php
/**
 * Et alors, imaginons qu'une personne puisse avoir plusieurs voitures, comment s'y prendrait-on ? Voilà un exemple
 *
 * Créons une classe voiture avec tout ce qui va avec !
 */
class Voiture {
  private $marque;
  private $couleur;
  private $kms;

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

  public function getKms(){
    return $this->kms;
  }
  public function setKms($kms){
    $this->kms = $kms;
  }

  public function __construct($marque, $couleur, $kms){
    $this->marque = $marque;
    $this->couleur = $couleur;
    $this->kms = $kms;
  }
}

/**
 * C'était long ! Créons maintenant une classe Personne qui a un nom, un prénom, et UN ENSEMBLE DE VOITURES !
 */
class Personne {
  private $nom;
  private $prenom;
  private $voitures;

  public function getNom(){
    return $this->nom;
  }
  public function setNom($nom){
    $this->nom = strtoupper($nom);
  }

  public function getPrenom(){
    return $this->prenom;
  }
  public function setPrenom($prenom){
    $this->prenom = ucfirst($prenom);
  }

  public function getVoitures(){
    return $this->voitures;
  }
  public function setVoitures($voitures){
    $this->voitures = $voitures;
  }
  /**
   * Créons un accesseur qui permette de rajouter une nouvelle voiture !
   */
  public function addVoiture($voiture){
    array_push($this->voitures, $voiture);
  }

  public function __construct($nom, $prenom, $voitures){
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setVoitures($voitures);
  }
}

/**
 * Voilà, nous avons créé nos classes !
 * Créons maintenant une personne qui n'a pas encore de voiture (on va donc lui passer un tableau vide dans son constructeur)
 */
$p = new Personne("chamla", "lior", []);
var_dump($p);
/**
 * Imaginons que la personne achète une voiture, il faut d'abord la créer, la matérialiser
 */
$voiture1 = new Voiture("Hyundai", "grise", 20000);
/**
 * Maintenant, il suffit d'ajouter la voiture à l'ensemble des voitures de la personne
 */
$p->addVoiture($voiture1);
var_dump($p);
/**
 * Ajoutons lui une deuxième voiture !
 */
$voiture2 = new Voiture("Smart", "grise", 100000);
$p->addVoiture($voiture2);
var_dump($p);
/**
 * Imaginons maintenant que la personne vende ses deux voitures en échange de deux autres :
 */
$voiture3 = new Voiture("Mercedes", "blanche", 100000);
$voiture4 = new Voiture("Renault", "noire", 200000);
/**
 * Mettons ces voitures dans un tableau
 */
$voitures = [$voiture3, $voiture4];
/**
 * Changeons la collection de voitures de la personne par ce nouveau tableau
 */
$p->setVoitures($voitures);
var_dump($p);
/**
 * N'oubliez pas en effet que la collection de voitures de la Personne est un fait un tableau, on peut donc utiliser les fonctions des tableaux sur la collection !
 *
 * Par exemple, essayons de compter les voitures de la personne
 */
$nombre = count($p->getVoitures());
echo "La personne a $nombre voitures !<br>";
/**
 * Essayons même un petit foreach (pourquoi ? Parce qu'on peut.)
 */
foreach($p->getVoitures() as $voiture){
  echo "La voiture est une " . $voiture->getMarque() . " de couleur " . $voiture->getCouleur() . "<br>";
}
/**
 * Calculons l'ensemble des kms parcourus par les voitures de la personne
 */
$total = 0;
foreach($p->getVoitures() as $voiture){
  $total = $total + $voiture->getKms();
}
echo "L'ensemble des kms parcourus est $total kms";
