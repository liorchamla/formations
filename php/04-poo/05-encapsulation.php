<?php
/**
 * Etudions ici le phénomène d'ENCAPSULATION des données ! Dans la programmation orientée objets, une classe peut décider de "protéger" ses données. Pour ce faire, elle utilise des MODIFICATEURS sur ses propriétés ou fonctions :
 * - private veut dire que la propriété ou fonction n'est accessible que depuis l'intérieur d'un objet
 * - public veut dire que la propriété ou fonction est accessible aussi depuis l'extérieur d'un objet
 * - protected est assez complexe et on pourra le voir d'ici 2 ou 3 exercices
 *
 * Créons une classe Personne (on commence à avoir l'habitude ...) qui possède 3 propriétés et un constructeur
 */
class Personne {
  /**
   * Gardons le prénom avec un modificateur PUBLIC (il sera modifiable en dehors de l'objet)
   */
  public $prenom;
  /**
   * Donnons au nom et à l'age un modificateur PRIVATE (modifiable uniquement par l'objet lui-même)
   */
  private $nom;
  private $age;

  public function __construct($prenom, $nom, $age){
    $this->prenom = $prenom;
    $this->nom = $nom;
    $this->age = $age;
  }

  public function presentation(){
    return "Bonjour, je m'appelle $this->prenom $this->nom et j'ai $this->age ans !";
  }
}
/**
 * Créons un objet $formateur issu de la classe Personne
 */
$formateur = new Personne("Lior", "Chamla", 30);
/**
 * Affichons le contenu du $formateur
 */
var_dump($formateur);
/**
 * Essayons de modifier le prénom du formateur
 */
$formateur->prenom = "Joseph"; // Aucun soucis, prenom est public, on peut donc le manipuler si on veut
var_dump($formateur);
/**
 * Essayons maintenant de modifier le nom du formateur
 */
$formateur->nom = "Dupont"; // ERREUR ! INTERDIT ! C'est une donnée privée de la classe personne et donc personne à part elle ne peut y toucher !

/**
 * Vous avez compris : les modificateur (public, private, protected) permettent à la classe Personne de protéger l'accès aux données qu'elle possède. Cela vous permet de vous assurer que personne ne pourra toucher aux données d'une façon que vous ne souhaitez pas.
 */
