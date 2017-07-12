<?php
/**
 * Testons notre classe Textarea !
 */
include '03-textarea.php';

$maTextarea = new Textarea('adresse', 'adresse', '', 'Tapez votre adresse', '');
echo $maTextarea->display();
