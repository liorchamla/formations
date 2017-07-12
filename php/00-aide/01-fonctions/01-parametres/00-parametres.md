# Les paramètres des fonctions
Parfois, les fonctions ont besoin qu'on leur donne des informations afin de pouvoir s'exécuter correctement.

Les inventeurs des langages de développement nous ont donc donné des moyens afin de communiquer aux fonctions les informations nécessaires à leur travail : cela s'appelle __les paramètres des fonctions__.

Imaginons une fonction "additionner()" qui servirait à additionner 2 nombres. Si on ne lui dit pas quels sont les nombres à additionner, elle aura du mal à faire une addition. De la même façon qu'une femme/homme de ménage aurait du mal à savoir quelle chambre elle doit faire dans un hôtel si on ne lui fourni par le numéro de la chambre que l'on souhaite faire nettoyer.
# Exemples :
```
// On définit la fonction additionner
function additionner(){
    echo 2 + 2;
}

// On appelle la fonction additionner :
additionner(); // affiche 4
// On la rappelle :
additionner(); // affiche encore 4
```
Pas super dynamique non ? Cette fonction ne sert à rien, elle affiche tout le temps _4_ ...

Si nous souhaitons lui faire additionner des nombres qui nous intéressent plus, encore faut-il lui fournir en __paramètres__ les nombres qui nous intéressent !
```
// On définit la fonction additionner qui reçoit 2 paramètres qui 
// représentent les deux nombres que l'on souhaite additionner
function additionner($nombre1, $nombre2){
    echo $nombre1 + $nombre2;
}

// On appelle la fonction additionner :
additionner(2, 3); // affiche 5 (2+3)
// On la rappelle :
additionner(120, 150); // affiche 270 (120 + 150)
```

C'est déjà bien mieux non ?

On dit donc que la fonction additionner __reçoit deux paramètres__ et s'en sert pour fonctionner.

Evidemment, on peut donner à la fonction des paramètres qui sont des variables au moment où on appelle la fonction :
```
// On définit deux variables
$x = 3;
$y = 8;
// On appelle la fonction en lui donnant en paramètres
// les variables qu'on vient de créer ($x et $y)
additionner($x, $y); // affiche 11 (3+8 car $x vaut 3 et $y vaut 4)
```