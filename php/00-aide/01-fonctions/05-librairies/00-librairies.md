# Les librairies de fonctions
Comme dans tous les langages de programmation, on s'est très vite rendu compte qu'il serait beaucoup plus cool de pouvoir ranger nos fonctions dans des fichiers bien organisés, pour pouvoir s'en servir en suite dans d'autres fichiers.

# Les avantages des librairies
Imaginez : vous avez un projet qui demande plusieurs fichiers PHP (typiquement, laissez moi réfléchir .. UN SITE INTERNET !), et vous vous rendez compte que votre fonction ```additionner()``` va vous servir non pas dans un seul fichier (auquel cas vous pourriez créer la fonction et l'utiliser dans le même fichier) mais dans 3 ou 4 fichiers PHP différents.

Vous comprenez bien qu'il est hors de question de définir 4 fois votre fonction (une fois dans chaque fichier).

C'est le but du principe de la librairie. On va coder notre fonction une seule fois dans un fichier qui contient cette fonction et d'autres, puis dans les autres fichiers vous allez simplement faire appel à cette librairie lorsque vous aurez besoin d'utiliser une de ses fonctions.

# Ca se présente comment ?
Le mot __librairie__ peut faire peur, mais ce n'est en réalité qu'un fichier qui contient une suite de définitions de fonctions.

# Comment utiliser les fonctions d'une librairie
C'est très simple, en PHP, il suffit d'utiliser les fonctions ```require_once()``` ou ```include_once()``` en précisant le nom du fichier (la librairie) que l'on souhaite utiliser.

# Exemple :

Imaginez un fichier __maths.php__  qui contient :
```
function additionner($x, $y){
    return $x + $y;
}

function multiplier($x, $y){
    return $x + $y;
}

function diviser($x, $y){
    return $x / $y;
}
```
Si nous voulons utiliser ces fonctions dans un autre fichier, il nous faut l'inclure. Imaginez donc un autre fichier __calcul.php__ qui reçoit en POST les données d'un formulaire :

```
<?php
// On inclue la librairie "maths.php"
require_once('maths.php');

// On récupère les données du POST
$nombre1 = $_POST['premierNombre'];
$nombre2 = $_POST['deuxiemeNombre'];

// On utilise une fonction de notre librairie
$somme = additionner($nombre1, $nombre2);
?>
<h1>Voici la somme : <?= $somme ?></h1>
```