# TP Sessions - Création d'un micro panier
Dans cet exercice nous allons essayer de créer un panier très minimaliste

# Le fichier index.php
Dans ce fichier, on va créer :
* Un ```<h1>``` qui contiendra "_liste des produits_"
* Un ```<ul>``` qui contiendra 3 ```<li>``` : chacun des li devra contenir un lien qui pointe vers le fichier __ajout.php__ en passant en GET un paramètre __nom__ et un paramètre __prix__ (exemple : ```<a href="ajout.php?nom=Teeshirt&prix=10">Ajouter</a>```)
* Un ```<h2>``` qui affiche "_Mon panier_"
* Un ```<ul>``` qui servira à afficher les produits ajoutés au panier (dans la session)

# Le fichier ajout.php
Ce fichier servira à ajouter des produits dans le panier !

Il doit tout simplement :
1) Vérifier que dans le GET on ait bien un __nom__ et un __prix__.
2) Si c'est le cas, il faut créer un tableau dans une variable ```$produit```
    1) La case "_nom_" doit contenir l'information __nom__
    2) La case "_prix_" doit contenir l'information __prix__
3) Rajouter le ```$produit``` dans la variable ```$_SESSION['panier']``` (indice : ```$_SESSION['panier'][] = $produit;```)
4) Enfin, le fichier doit nous rediriger sur le fichier __index.php__

# Retour sur le fichier index.php
Il faut maintenant passer à l'affichage du panier sur la page __index.php__

Dans le dernier ```<ul>``` il faut que pour chaque élément qui se trouve dans ```$_SESSION['panier']``` :
1) Un affiche un ```<li>``` qui affiche le nom du produit et son prix
2) C'est tout ! :-)

# Conseils :
Je vous ai laissé ma version dans les fichiers, vous n'avez qu'à vous y reporter si vous voulez vous en inspirer.