# Enoncé de l'exercice 2
Dans cet exercice, nous allons récupérer des données au format JSON générées par un fichier PHP au sein d'une page HTML de façon __asynchrone__ grâce à AJAX !
Il sera donc assez semblable à l'exercice 1 sauf que les données récupérées ne sont pas formatées et c'est donc Javascript qui se chargera d'en faire ce qu'il veut !
---
## Fichier index.html
On gardera le même fichier HTML !
#### Structure HTML :
On prendra soin d'ajouter au fichier HTML simple un button dont l'identifiant sera "_load-json_"
#### Fonctionnalités Javascript :
* Lorsque l'on clique sur le bouton dont l'identifiant est "load-json", on fait un appel AJAX en GET sur la page get-contacts.php !
* La réponse de la requête AJAX doit être convertie en variable Javascript grâce à la fonction JSON.parse()
* On doit supprimer tout ce que contient la div dont l'identifiant est "_contenu_"
* Pour chaque contact renvoyé, on veut créer une div qui a la classe "_contact_" et qui contient les informations du contact (firstName, lastName et phoneNumber)
* On veut que les div soient intégrées à la div qui a l'identifiant "_contenu_"

## Fichier get-contacts.php

#### Fonctionnalités :
* Connectez-vous à la base de données ajaxcontacts grâce à PDO !
* Récupérez l'ensemble des contacts via une requête SQL
* Créez un tableau contenant l'ensemble des résultats (utilisez fetchAll() avec le mode de récupération PDO::FETCH_ASSOC)

#### Affichage :
Votre fichier doit afficher comme résultat l'ensemble des données au format JSON (pour cela, utilisez la fonction json_encode()) 

## Conseils :
* Testez votre fichier PHP tout seul, assurez vous que le résultat est le bon avant de vous lancer dans le délire AJAX
* Pour ce qui est du Javascript, inspirez vous de ce que l'on a vu ce matin !