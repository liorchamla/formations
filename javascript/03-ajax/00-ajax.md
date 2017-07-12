# Présentation de AJAX

Traditionnellement, quand un navigateur demande une page à un serveur, le serveur renvoie la page web demandée et le navigateur doit donc rafraichir le contenu afin d'afficher la nouvelle page. 

Et ainsi de suite à chaque fois que l'on demande une nouvelle ressource en cliquant sur un lien.

__Grâce à AJAX (Asynchronous Javascript And XML)__, le navigateur, via Javascript, va demander en arrière plan une ressource au serveur et le serveur va lui répondre. 

Tout cela se passe sans que le navigateur ne rafraîchisse la page ! Le contenu renvoyé par le serveur sera ensuite reçu par le Javascript qui pourra en faire ce que bon lui semble.

## Pourquoi Asynchrone ?

Lorsqu'un navigateur demande une page par le biais classique, il se fige tant qu'il n'a pas reçu la page à afficher, puis rafraichit le contenu. Cette action est synchrone (le navigateur se fige le temps que l'appel soit fait et que la réponse arrive, puis se rafraichit). 

Ici, le navigateur ne se fige pas, il lance un appel mais continue d'être pleinement fonctionnel le temps que la réponse du serveur lui arrive, l'utilisateur garde la main et peut toujours naviguer dans la page qu'il a sous les yeux.

## Pourquoi Javascript ?

Pour faire fonctionner ces demandes asynchrones, on est obligés de passer par un objet qui fait partie du langage Javascript : XMLHttpRequest. Cet objet est assez complexe à faire fonctionner mais jQuery, là aussi, ainsi que la version 6 de Javascript va nous permettre de l'utiliser beaucoup plus simplement.

## Pourquoi XML ?

Parce qu'auparavant, les réponses envoyés par le serveur à ce genre de requêtes asynchrones étaient codés en XML. Le navigateur demandait au serveur la liste des clients d'une entreprise par exemple, et le serveur donnait une réponse en XML.

Désormais, nous n'utilisons plus le format XML pour faire passer des informtations entre le serveur et le navigateur, mais plutôt du JSON ou encore du HTML (pour voir la différence entre le format XML et le format JSON pour une réponse qui contiendrait 3 clients, voir les images ci-joint).

# Principales utilisations de l'AJAX ?

Ce qui est cool avec AJAX, c'est qu'on peut demander des données ou du contenu à un serveur distant sans recharger la page du navigateur. Et d'ailleurs (et là ça devient vraiment cool), cela nous permet de construire des pages à partir de sources de contenus externes !

L'exercice de l'après-midi devrait vous permettre de mieux le comprendre en construisant une page web qui va aller demander des données ... à un service de météo en ligne ! Donc votre page va obtenir du contenu à partir d'une source externe qui n'a rien à voir avec vous ou votre site web ! Excellent non ?



Différences entre des données au format XML et JSON :