# Comprendre que "_la cuillère n'existe pas_"
Où est-ce que je veux en venir avec cette référence au film _The Matrix_ ? Je veux que vous pensiez et que vous sachiez que __la fonction n'existe pas__.

Alors évidemment, elle existe, elle est définie, elle a un nom, elle accèpte des paramètres et nous retourne une valeur.

Mais je veux que vous PENSIEZ qu'elle n'existe pas.

# L'appel d'une fonction, c'est une valeur
En effet, quand vous appelez une fonction, et que celle-ci exécute le code prévu, ce que je veux que vous voyiez ce n'est pas l'appel d'une fonction, c'est le retour de la fonction.

__Vous n'avez pas besoin de systématiquement stocker le retour d'une fonction dans une variable !__

```
// Créons une fonction additionner()
function additionner($x, $y){
    return $x + $y;
}
// Faire ceci :
$resultat = additionner(2, 2);
echo "Le resultat est " . $resultat;
// Est strictement identique à faire ceci :
echo "Le resultat est " . additionner(2,2);
// Les deux codes affichent : "Le résultat est 4"
```
Vous avez vu ? Stocker le retour dans une variable pour l'afficher, c'est la même chose que d'afficher directement le retour de la fonction.

Donc quand vous voyez __additionner(2,  2)__, ne voyez pas l'appel de la fonction, voyez "__4__" (le __retour__ de la fonction) : _la fonction n'existe pas_.

```
// Pour une fonction multiplier
function multiplier($x, $y){
    return $x * $y;
}

// var_dump est une fonction qui prend en paramètre
// la valeur que l'on veut afficher
// donc on peut var_dump le retour de la fonction multiplier()
var_dump(multiplier(3,5)); // affiche 15 (3x5)