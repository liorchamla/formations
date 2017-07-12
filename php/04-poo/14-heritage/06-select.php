<?php
/**
 * Essayons de créer maintenant un champ <select> avec ses options!
 * Créons 3 options pour une liste déroulante contenant la civilité d'une personne
 */
include '05-select.php';

$option1 = new Option('Mme', 'Madame'); // <option value="Mme">Madame</option>
$option2 = new Option('Mlle', 'Mademoiselle'); // <option value="Mlle">Mademoiselle</option>
$option3 = new Option('M', 'Monsieur'); // <option value="M">Monsieur</option>
/**
 * Créons maintenant le futur <select> !
 */
$select = new Select('civilite', 'civilite', '');
/**
 * Ajoutons lui les options (ce doit être un tableau)
 */
$select->options = [$option1, $option2, $option3];
/**
 * Affichons le !
 */
echo $select->display();
