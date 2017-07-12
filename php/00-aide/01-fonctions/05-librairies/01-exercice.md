# Exercice ! Créez votre librairie !
Dans cet exercice, vous allez devoir créer une librairie __maths.php__ qui contient les fonctions suivantes :
* calculTVA() qui reçoit un paramètre $montantHT et un paramètre $tauxTVA qui contient par défaut 0,2 (20%) et qui renvoie le $montantTVA 
* calculTTC() qui reçoit en paramètre $montantHT et un paramètre $tauxTVA qui contient par défaut 0,2 (20%) et qui renvoie le $montantTTC
* calculTotal() qui reçoit en paramètres $montantHTProduit et un autre paramètre $quantite et qui retourne la multiplication du montant par la quantité

# Utilisez votre librairie dans un fichier PHP/HTML
Créez un fichier __produit.php__ qui contient du HTML avec un ```<form>``` dont l'action pointe vers le même fichier (__produit.php__) avec la méthode POST.

Dans le formulaire vous devez avoir deux inputs :
* Un input de type text dont le nom est __prix__
* Un input de type number dont le nom est __quantite__

Et évidemment un ```<button type="submit">``` qui affiche : calculer le total.

# Fonctionnement
Quand l'utilisateur soummet le formulaire en ayant fourni un prix unitaire et une quantité, on doit :
1) Récupérer les données en POST (faites ça en haut du fichier et UNIQUEMENT si les données existent (```array_key_exists```)
2) Grâce aux données récupérées, utiliser les fonctions de la librairie pour :
    * Calculer le montant HT total (prix * quantite) grâce à votre fonction __calculTotal()__
    * Calculer ensuite le montant de TVA en appelant la fonction __calculTVA()__ en lui donnant en paramètre le montant total calculé avant
    * Calculer le montant TTC en appelant la fonction __calculTTC()__ en lui donnant aussi le total calculé avant
3) Une fois que vous avez toutes vos données, en dessous du formulaire faites une ```<div>``` qui affichera :
```
Montant total HT : XXX €
Montant TVA : XXX €
Montant TTC : XXX €
```

# Au boulot !