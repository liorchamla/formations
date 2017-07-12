# Enoncé de l'exercice 1
Dans cet exercice, nous allons récupérer du code HTML généré par un fichier PHP au sein d'une page HTML de façon __asynchrone__ grâce à AJAX !

---
## Fichier index.html
#### Structure HTML :
Créer un fichier index.html qui va contenir :
* Un header contenant un h1 qui dit "_Gestion des contacts_"
* Un main contenant une div qui a l'identifiant "_contenu_" et un button qui a l'identifiant "_load-html_"
#### Fonctionnalités Javascript :
Dans le fichier HTML, créez une balise script et codez dedans :
* Au clic sur le button qui a l'identifiant "_load-html_"
    * Il faut faire un appel AJAX en GET vers le fichier get-contacts-html.php
    * Il faut récupérer la réponse et l'intégrer dans la div#contenu !

## Fichier get-contacts-html.php
#### Fonctionnalités :
* Connectez-vous à la base de données ajaxcontacts grâce à PDO !
* Récupérez l'ensemble des contacts via une requête SQL
* Créez un tableau contenant l'ensemble des résultats (utilisez fetchAll() avec le mode de récupération PDO::FETCH_ASSOC)

#### Affichage :
Votre fichier PHP doit afficher l'ensemble des contacts sous forme de li dans un ul

## Conseils :
* Testez votre fichier PHP tout seul, assurez vous que le résultat est le bon avant de vous lancer dans le délire AJAX
* Pour ce qui est du Javascript, inspirez vous de ce que l'on a vu ce matin !