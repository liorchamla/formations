<?php
/**
 * Testons la classe Input ! Créons un objet et affichons le !
 */
include '01-input.php';

$monChamp = new Input('prenom', 'prenom', 'input-red', 'Tapez votre prénom !', '');
echo $monChamp->display();
