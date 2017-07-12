<?php
/**
 * Créons maintenant une classe qui hérite de la classe Input mais qui représentera plutôt une <textarea>
 * Dans un premier temps, il faut inclure le fichier qui contient la classe Input, sinon on aura une erreur
 * En effet, PHP ne connait pas la classe Input si on ne lui dit pas où elle se trouve
 */
include_once '01-input.php';

class Textarea extends Input {
  /**
   * La seule chose qui change, c'est la fonction display, on va donc la redefinir
   */
  public function display(){
    return "<textarea name='$this->name' id='$this->id' class='$this->class' placeholder='$this->placeholder'>$this->value</textarea>";
  }
}
?>
