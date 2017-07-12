# Les valeurs de retour des fonctions
Nous l'avons vu, pour expliquer à une fonction les informations dont elle a besoin pour fonctionner, nous lui envoyons des __paramètres__.

Mais comment une fonction pourrait nous __répondre__ ? Comment pourrait-elle nous dire quelque chose ? Dans le cas par exemple ou nous lui posons une question ?

Grâce à ce qu'on appelle la __valeur de retour__ (ou en anglais dans toutes les documentations __return value__).

# Exemple :
Imaginons notre fonction additionner(). Et imaginons qu'on ne veuille pas que la fonction affiche le résultat, nous voulons simplement qu'elle __nous donne le résultat__ de l'addition :
```
// Définissons la fonction additionner
function additionner($nombre1, $nombre2){
    return $nombre1 + $nombre2; // la fonction RENVOIE le résultat    
}

// Nous pouvons maintenant récupérer et utiliser le résultat
$x = 3;
$y = 20;
$resultat = additionner($x, $y); // renvoie 23 (3 + 20)
echo "Le résultat est " . $resultat; // affiche "Le résultat est 23"
```

Vous l'avez compris, l'intérêt est simplement que la fonction __réponde à une question__ !

Autre exemple un peu plus poussé :
```
// Définissons une fonction getProducts() 
// qui renvoie les produits d'une base de données
function getProducts(){
    // On imagine ici toute notre connexion
    // L'envoi d'une requete SQL
    // Et la récupération des données
    // Et enfin, la fonction va répondre :
    return $products;
}

// On appelle la fonction et on espère qu'elle va nous
// répondre en nous donnant les produits
$mesProduits = getProducts();
// La variable $mesProduits contient maintenant le
// retour de la fonction getProducts()
// c'est à dire les produits retrouvés dans la base de données
```

# Important : le retour termine !
Et oui, autre chose que les étudiants ont parfois du mal à comprendre : __une fois qu'une fonction utilise son mot clé return, elle s'arrête !__

Oui, tout le code qui se trouverait après la ligne du __return__ ne s'exécutera pas !

```
function additionner($x, $y){
    $resultat = $x + $y; // fait le calcul
    return $resultat; // retourne le resultat
    echo "Bonjour !"; // Ne se fera jamais, la fonction 
    // s'est arrêté lors du "return"
    echo "Ca va vous ?!"; // Pareil, ça ne se fera pas. C'est écrit
    // mais ça ne se fera pas. Car c'est après le return.
}
```