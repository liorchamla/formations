<?php

/**
 * Dans ce fichier, vous devrez analyser la requête de l'utilisateur 
 * afin de savoir si l'utilisateur veut poster un message ou 
 * lister les derniers messages.
 * 
 * Toutes les informations doivent être affichées au format JSON
 * afin d'être adaptées à des appels AJAX via Javascript
 */
if($_GET['action'] == "write"){
    postMessage();
} else {
    getMessages();
}
 
function getMessages(){
    
    echo json_encode($messages);
}


function postMessage(){
    
}


?>