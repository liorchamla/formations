<?php

require_once('01-input.php');
require_once('02-textarea.php');
require_once('03-select.php');
require_once('04-form.php');

$form = new Form('inscription','inscription', '#', 'post', '');

$optionM = new Option('M', 'Monsieur');
$optionMme = new Option('Mme', 'Madame');
$optionMlle = new Option('Mlle', 'Mademoiselle');

$civilite = new Select('civilite', 'civilite', '');
$civilite->addOption($optionMlle);
$civilite->addOption($optionMme);
$civilite->addOption($optionM);

$majorite = new Select('majorite', 'majorite', '');
$optionOui = new Option('1', 'Oui');
$optionNon = new Option('0', 'Non');

$majorite->addOption($optionOui);
$majorite->addOption($optionNon);

$prenom = new Input('prenom', 'prenom', '', 'Tapez votre prénom !', '');
$nom = new Input('nom', 'nom', '', 'Tapez votre nom !', '');
$adresse = new Textarea('adresse', 'adresse', '', 'Tapez votre adresse !', '');

$form->addField($civilite);
$form->addField($nom);
$form->addField($prenom);
$form->addField($majorite);
$form->addField($adresse);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<style>
		input, select, textarea {
			display:block;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<h1>Inscription au site</h1>
	<?= $form->display() ?>
</body>
</html>