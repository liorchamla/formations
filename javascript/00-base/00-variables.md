# Javascript et les variables !
Les variables sont la base de la programmation informatique ! __Elles permettent de manipuler des données !__

L'informatique, c'est la science de la __gestion de l'information__. C'est donc le fait de prendre connaissance de données et de les manipuler dans le but d'arriver à un résultat voulu.

Les variables permettent de stocker et manipuler les données :
* L'âge peut être une variable
* Le prénom peut être une variable
* Le nom peut être une variable
* Une personne toute entière peut être une variable !
* En fait, tout peut être une variable !

## Des boites, des étiquettes et des papiers !

En informatique, on peut imaginer une variable comme une boîte en carton :
* __Elle prend une certaine taille__ (comme une boite qui peut être grande ou petite)
* __Elle a un nom__ (comme une boite sur laquelle on met une étiquette pour la reconnaitre)
* __Elle contient quelque chose__ : une information !
* __Son contenu peut changer__ (comme une boite en carton qu'on ouvrirait pour changer son contenu)
* __On peut voir son contenu__ (comme une boite en carton qu'on ouvre pour vérifier ce qu'elle contient)

En résumé : une variable porte un nom et contient une information que l'on peut lire et mofidier à volonté. C'est comme cela que la programmation commence : par des informations (d'où le nom _informatique_) !

## Syntaxe

Quelque soit le langage informatique utilisé, créer une variable est la chose la plus simple qu'il soit. 

```var prenom = "Lior";```

En javascript, pour créer une variable on utilise le mot clé __var__, puis on donne le __nom de la variable__ (ici c'est _prenom_). On peut ensuite signifier ce que va contenir la variable en utilisant le symbole __=__ et en spécifiant la __valeur__ que doit contenir la variable (ici c'est _"Lior"_).

On peut modifier le contenu d'une variable dès qu'on le souhaite :

```
// Imaginons que l'on stocke l'âge 
// d'une personne qui a 30 ans
var age = 30;

// Imaginons qu'un an passe et qu'on veuille
// changer le contenu de la variable pour
// bien signifier que la personne a 
// maintenant 31 ans :
age = 31;
```

# Conclusion 
Une variable est une boîte qui possède un __nom__ et qui contient une __information__ que l'on peut modifier lorsque le besoin s'en fait sentir !

```
// On déclare une variable x qui contient 10
var x = 10;
// On déclare une variable y qui contient 20
var y = 20;
// On déclare une variable resultat qui contient
// le résultat de l'addition de nos 2 variables
var resultat = x + y;
// La variable resultat contient maintenant 30

// On peut changer le contenu de resultat
// pour qu'il contienne désormais le resultat
// de la multiplication
resultat = x*y;
// La variable resultat contient maintenant 200 !
// Son contenu a changé !
