# AJAX : TP de l'après midi !
Dans cet exercice, nous allons nous connecter à une source de données externe en AJAX afin de récupérer des auteurs et leurs articles !

# Structure HTML :
Votre page devra contenir :
1) Un header qui contiendra un h1 avec le titre "_Bienvenue sur le blog WF3 !_"
2) Une balise main qui va contenir deux sous-éléments
    1) Un ul dont l'identifiant sera __users__
    2) Une div dont l'identifiant sera __articles__ et qui contiendra dès le début un __h2__ qui dira "_Cliquez sur un auteur pour voir ses articles_"
    
# Design de la page :
Rien de bien particulier en termes de couleurs, juste de la disposition :
1) Le ul dont l'identifiant est __users__ devra être en inline-block et en vertical-align: top et devra avoir une largeur de 30%
2) La div dont l'identifiant est __articles__ devra être en inline-block et devra avoir une largeur de 55%
3) Les li qui sont à l'intérieur du ul qui a l'identifiant __users__ doivent avoir la propriété ```cursor: pointer```

# Typographies Google Fonts:
1) Les titres doivent être en typographie "Montserrat"
2) Le reste des éléments doivent avoir la typographie "Lato"

# Fonctionnalités Javascript
1) Une fois que la page est chargée (```$(document).ready(function(){...})```) il vous faut appeler l'adresse ```https://jsonplaceholder.typicode.com/users``` qui va vous renvoyer du JSON (donc utilisez ```$.getJSON```)
2) Lorsque l'appel à l'URL est terminé, vous recevez un tableau d'utilisateurs. Vous devez donc
    1) boucler sur chaque utilisateur du tableau
    2) pour chaque utilisateur, créez un ```<li>``` qui contiendra la propriété ```name``` de l'user
    
    __ATTENTION :__ Il est important que le ```<li>``` que vous créez pour chaque user possède un attribut ```data-id=""``` dont la valeur devra être la propriété ```id``` de l'user !
    
3) Vous devez créer un gestionnaire d'événement un peu particulier. Il exprime le fait que lorsque l'on cliquera sur un li à l'intérieur du ul#auteurs, il va se passer quelque chose :
    1) Vous devez récupérer l'identifiant de l'auteur dans l'attribut ```data-id=""``` qui est dans le li sur lequel on vient de cliquer (pour faire cela vous devez utiliser ```$(this).data('id')```) ;-)
    2) Vous devez faire le ménage dans la div qui a l'identifiant __articles__
    3) Une fois que vous connaissez l'identifiant vous pouvez appeler une autre URL en AJAX : ```https://jsonplaceholder.typicode.com/users/ID-DE-L-AUTEUR/posts``` en remplaçant bien ID-DE-L-AUTEUR par l'identifiant récupéré dans le li !
    4) Vous récupérez du JSON, donc utilisez $.getJSON. Une fois que le serveur vous répond, vous récupérez en fait un tableau d'articles.
        1) pour chaque article récupéré, créez une balise __article__
        2) à l'intérieur de la balise article, placez un __h3__ qui contiendra la propriété __.title__ de l'objet
        3) à l'intérieur de la balise article, placez aussi un __p__ qui contiendra la propriété __.body__ de l'objet
        4) à l'intérieur de la balise article, placez enfin un __hr__
        4) ajoutez l'article à votre div qui a l'identifiant __articles__
        
# Et voilà, vous avez un blog en AJAX !
    