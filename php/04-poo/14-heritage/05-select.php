<?php
/**
 * Créons maintenant une classe qui hérite de la classe Input mais qui va représenter une liste déroulante. C'est un peu plus compliqué car une liste déroulante ne possède pas de placholder et surtout elle possède un ensemble d'options !
 */
include_once '01-input.php';

class Select extends Input {
  /**
   * Il faut ajouter à ce dont hérite une propriété $options qui est un tableau représentant les options
   */
  public $options;
  /**
   * Il faut redéfinir le constructeur pour qu'il corresponde plus à ce qu'on souhaite
   */
  public function __construct($name, $id, $class){
    $this->name = $name;
    $this->id = $id;
    $this->class = $class;
  }
  /**
   * Il faut redéfinir la fonction display() pour qu'elle retourne un <select> cohérent !
   */
  public function display(){
    // On créé la balise ouvrante du select
    $select = "<select name='$this->name' id='$this->id' class='$this->class'>";
    // Pour chaque option du select
    foreach($this->options as $option){
      // On créé l'option en se servant des propriétés value et text (voir plus bas la définition d'un objet Option)
      $select .= "<option value='$option->value'>$option->text</option>";
    }
    // On créé la balise fermante du select
    $select .= "</select>";
    // On renvoie le <select> entièrement formé !
    return $select;
  }
}
/**
 * Créons une petite classe qui permettra de gérer les options du Select
 */
class Option {
  public $value;
  public $text;

  public function __construct($value, $text){
    $this->value = $value;
    $this->text = $text;
  }
}
