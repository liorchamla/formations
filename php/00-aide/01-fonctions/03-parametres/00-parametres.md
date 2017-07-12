# Les paramètres par défaut ?!
Et oui, revenons un peu sur nos pas pour reparler des paramètres des fonctions.

Vous l'avez compris, on utilise les paramètres pour donner aux fonctions des informations qui sont essentielles à leur fonctionnement !

Il existe un concept très important en PHP (ainsi que dans d'autres langages, mais pas en Javascript pour l'instant) : les __paramètres par défaut__.

# Comment ça fonctionne ?
Imaginez une fonction qui permette d'afficher une phrase et un retour à la ligne :
```
function afficher($phrase, $sautLigne){
    echo $phrase;
    
    if($sautLigne === true){
        echo "<br>";
    }
}

afficher("Bonjour", true); // affiche "Bonjour<br>";
afficher("Aurevoir", false); // affiche "Aurevoir"
```
Cette fonction reçoit deux paramètres :
* $phrase qui représente la phrase à afficher
* $sautLigne qui dit si l'on doit aller à la ligne ou pas

Comment pourrait-on faire en sorte qu'on n'ait pas TOUJOURS à spécifier si nous souhaitons un saut de ligne ou pas ? Comment dire à la fonction que si jamais on oublie de le spécifier, on doit aller à la ligne par défaut ? En utilisant __les paramètres par défaut__ : on va expliquer à la fonction que le paramètre $sautLigne contient _true_ par défaut :

```
function afficher($phrase, $sautLigne = true){
    echo $phrase;
    
    if($sautLigne === true){
        echo "<br>";
    }
}

afficher("Bonjour", true); // affiche "Bonjour<br>";
afficher("Ca va bien ?"); // affiche "Ca va bien<br>" même si on ne passe pas true en deuxième paramètre
afficher("Aurevoir", false); // affiche "Aurevoir"
```

Comprenez bien : dans la ligne qui définit la fonction afficher(), on a dit dans les parenthèses (la définition des paramètres de la fonction) que __par défaut__ (si on ne lui précise rien), le paramètre $sautLigne contiendra _true_.

Donc désormais quand on appellera la fonction afficher(), on pourra se contenter de ne lui donner qu'un seul paramètre (la phrase à afficher) car le deuxième paramètre sera forcément à _true_ (sauf, evidemment, si on passe _false_ à la fonction en deuxième paramètre)