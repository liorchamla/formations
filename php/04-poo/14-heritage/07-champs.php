<?php
/**
 * Utilisons désormais tous nos champs pour pouvoir créer un formulaire :-)
 */
include_once '01-input.php';
include_once '03-textarea.php';
include_once '05-select.php';
/**
 * Créons en plus de cela une classe Form qui contiendra un ensemble de champs et qui pourra afficher ces champs
 * Un formulaire possède les propriétés suivantes :
 * - l'identifiant (id)
 * - l'action
 * - la méthode (method)
 * - la classe (class)
 * - les champs du formulaire (fields)
 */
class Form {
  public $id;
  public $action;
  public $method;
  public $class;
  public $fields;
  // Constructeur
  public function __construct($id, $action, $method, $class){
    $this->id = $id;
    $this->action = $action;
    $this->method = $method;
    $this->class = $class;
  }
  /**
   * On créé une fonction display() !
   */
  public function display(){
    // On créé la balise ouvrante du formulaire en se servant des propriétés du formulaire
    $form = "<form id='$this->id' action='$this->action' method='$this->method'>";
    // Pour chaque champ, on veut utiliser le retour de la fonction display
    foreach($this->fields as $champ) {
      $form .= $champ->display();
    }
    // On créé un bouton de type submit
    $form .= "<button type='submit'>OK</button>";
    // On créé la balise fermante du form
    $form .= "</form>";
    // On renvoie le code du formulaire !
    return $form;
  }
}

/**
 * Créons maintenant les champs d'un formulaire d'inscription
 */
$nom = new Input('nom', 'nom', 'red', 'Tapez votre nom', ''); // un <input>
$prenom =  new Input('prenom', 'prenom', 'red', 'Tapez votre prénom', ''); // un autre <input>
$adresse = new Textarea('adresse', 'adresse', 'blue', 'Tapez votre adresse', ''); // une <textarea>
$optionM = new Option('M','Monsieur'); // une <option>
$optionMme = new Option('Mme','Madame'); // une autre <option>
$optionMlle = new Option('Mlle','Mademoiselle'); // une autre <option>
$civilite = new Select('civilite', 'civilite', 'blue'); // un <select>
$civilite->options = [$optionM, $optionMme, $optionMlle]; // on donne au <select> le tableau de ses <option>

$optionOui = new Option('1', 'Oui'); // une <option>
$optionNon = new Option('0', 'Non'); // une <option>
$majorite = new Select('majeur', 'majeur', 'red'); // un <select>
$majorite->options = [$optionOui, $optionNon]; // on donne au <select> le tableau de ses <option>

$formulaire = new Form('monFormulaire', '#', 'post', ''); // On créé un <form>
// On donne au formulaire le tableau de ses champs
$formulaire->fields = [
  $civilite,
  $nom,
  $prenom,
  $adresse,
  $majorite
];
/**
 * Oui, on est bien d'accord, d'un certain point de vue ça ne sert strictement à rien .. Mais croyez moi, vous comprendrez bientôt la puissance de ce machin.
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulaire</title>
  <style>
    .red {
      border: 2px solid red;
    }
    .blue {
      border: 2px solid blue;
    }
    input, select, textarea {
      display: block;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <h1>Formulaire d'inscription</h1>
  <?= $formulaire->display() ?>
</body>
</html>
