<?php
/**
 * Jusqu'ici, nous avons découvert la programmation orientée objet, mais nous ne l'avons pas utilisé dans le contexte
 * d'une vraie production sur le web. Créons une classe et des classes ENFANTS (qui HERITENT de la classe) qui vont nous servir dans le cadre du Web
 *
 * Créons d'abord une classe qui représentera un champ HTML <input>
 * Un <input> doit avoir :
 * - un nom (name)
 * - un identifiant (id)
 * - un placeholder
 * - une classe de style (class)
 * - eventuellement une valeur (value)
 */
class Input {
  public $name;
  public $id;
  public $placeholder;
  public $class;
  public $value;
  /**
   * Crééons un constructeur
   */
  public function __construct($name, $id, $class, $placeholder, $value){
    $this->name = $name;
    $this->id = $id;
    $this->class = $class;
    $this->placeholder = $placeholder;
    $this->value = $value;
  }
  /**
   * Créons maintenant une fonction display() qui va retourner le code HTML de l'input
   */
  public function display(){
    return "<input type='text' name='$this->name' id='$this->id' class='$this->class' placeholder='$this->placeholder' value='$this->value'>";
  }
}
