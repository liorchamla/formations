# A la découverte des fonctions en PHP
Dans ces exercices, nous découvrons et apprenons à utiliser les fonctions.

Petite chose intéressante, les fonctions ne sont pas liée à __PHP__ en particulier, elles existent dans tous les langages de programmation et marchent pratiquement partout de la même façon.

Apprendre les fonctions en PHP permet donc de les connaitres aussi pour Javascript, C, C++, Ruby, Java, et tout autre langage !

# Définir une fonction
Une fonction c'est une suite d'instructions que l'on va définir et à qui l'on va donner un nom.

Ce qui est pratique, c'est que plus tard, lorsqu'on voudra que cette suite d'instructions soit exécutée, on pourra __appeler la fonction__ par son nom afin que les instructions qu'elle contient soit exécutées.

# Appeler une fonction
Les fonctions portent des noms qui les identifient. Ces noms nous permettent plus tard d'__appeler les fonctions__. 

__Appeler une fonction__ c'est demander à ce que le code qui se trouve à l'intérieur s'exécute.

# Exemples :
```
// Définition de la fonction
function afficherBonjour(){
    echo "Hello World !";
}

// Appel de la fonction
afficherBonjour(); // affiche "Hello World !"
afficherBonjour(); // affiche "Hello World !"
```
Comme on le voit ci-dessus, on définit une fonction qui va juste afficher quelque chose. A chaque fois que l'on appelle cette fonction, le code qui se trouve à l'intérieur (et qui dit qu'on va afficher "Hello World") va s'exécuter !

