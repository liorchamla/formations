<?php
/**
 * Un des autres pilliers de la programmation orientée objets est L'HERITAGE ! Imaginons une entreprise dans laquelle on trouve plusieurs Personnes, elles ont toute un nom et un prénom
 *
 * Commençons donc par créer la classe Personne
 */
class Personne {
  public $nom;
  public $prenom;

  public function __construct($prenom, $nom){
    $this->nom = $nom;
    $this->prenom = $prenom;
  }

  public function presentation(){
    return "Bonjour, je suis $this->prenom $this->nom";
  }
}
/**
 * Créons donc 2 personnes
 */
$formateur = new Personne('Lior', 'Chamla');
$directeur = new Personne('Djamchid', 'Dalili');
echo $formateur->presentation() . "<br>";
echo $directeur->presentation() . "<br>";

/**
 * Imaginons que nous voulions représenter leur postes et responsabilités ?
 * Créons deux nouvelles classes : Formateur et Directeur
 */
class Formateur extends Personne {
  public function presentation(){
    return "Bonjour à tous, je suis $this->prenom $this->nom et je suis là pour vous former !";
  }
}

class Directeur extends Personne {
  public function presentation(){
    return "Bonjour chers amis, je suis $this->prenom $this->nom et je dirige une entreprise !";
  }
}
/**
 * Créons maintenant un formateur et un directeur
 */
$formateur = new Formateur('Lior', 'Chamla');
$directeur = new Directeur('Djamchid', 'Dalili');
echo $formateur->presentation() . "<br>";
echo $directeur->presentation() . "<br>";
/**
 * Voilà, très étrange n'est-ce pas ? Le formateur et le directeur ont aussi un nom et un prénom (alors qu'on n'a jamais précisé qu'ils devaient en avoir) et ils ont aussi le même constructeur que la classe Personne !
 *
 * Ils ont HERITE des propriétés et comportements de la Personne. Par contre ils ont REDEFINI le fonctionnement de la fonction presentation() !
 */
