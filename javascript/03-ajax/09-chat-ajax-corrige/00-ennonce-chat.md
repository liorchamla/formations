# Construire un Chat avec AJAX !
Dans cet exercice, vous allez construire un véritable système de discussion instantanée !

## Base de données 
Vous aurez besoin d'une base de données avec une table __messages__ qui aura les champs suivants :
* __id__ qui sera l'identifiant d'un message
* __author__ qui contiendra le nom de l'auteur d'un message
* __created_at__ qui sera le moment où le message a été posté
* __content__ le contenu du message posé !

Cette base de données existe déjà dans le fichier __ajax_chat.sql__ avec 3 messages d'exemple dedans.

## Fichier chat.php
Le fichier chat.php vous devra permettre :
* D'une part de récupérer les 20 derniers messages rangés par date de création ascendante (créez une fonction __getMessages()__). Bien sur, ces données devront être affichées en JSON pour être ensuite manipulées par le Javascript
* D'autre part de poster un message en envoyant les données "_author_" et "_content_" en POST (créez une fonction __postMessage()__)
* Vous devrez aussi analyser les paramètres POST et GET pour savoir quoi faire

## Fichier index.html
Dans ce fichier, vous devrez présenter les derniers messages postés et donner la possibilité à l'utilisateur de poster un nouveau message !
* Une ```<div id="messages">``` qui contiendra les messages du chat
* D'un ```<form id="post-message">``` qui enverra vers le fichier __chat.php__ les données du formulaire en POST avec
    * un ```<input name="author">``` qui permettra de donner l'auteur du message
    * un ```<input name="content">``` qui permettra de spécifier le contenu du message
    * un ```<button type="submit">``` qui permettra de soumettre le formulaire

## Fonctionnalités Javascript
En utilisant jQuery (ou Javascript natif si vous préférez) vous devrez :
* Créer une fonction __displayLastMessages()__ qui permette :
    * de vider la ```<div id="messages">```
    * de faire un appel AJAX vers le fichier __chat.php__ afin de récupérer les derniers messages en JSON et les disposer dans la ```<div id="messages">```
* Intercepter la soumission du formulaire et envoyer via une requête AJAX son contenu vers le fichier __chat.php__ et réactualiser la liste des messages en rappelant la fonction __displayLastMessages()__
* Créer une intervale qui permette de rappeler la fonction __displayLastMessages()__ toutes les 3 secondes

# Conclusion
Vous devriez avoir une page qui permette de poster des messages et de liste les messages déjà postés toutes les 3 secondes ! Donc l'illusion d'une messagerie instantanée (qui est en fait une messagerie qui se rafraichit toutes les 3 secondes).

Bien joué les amis !