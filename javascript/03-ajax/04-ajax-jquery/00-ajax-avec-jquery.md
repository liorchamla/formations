# AJAX avec jQuery !
```
$.ajax({ // Une requêté est envoyée vers la page 'page.php'
    type: "GET", // Définit le type de requête à effectuer, 'GET' est la valeur par défaut
    url: "page.php"
});
```
---
Évidemment, ces fonctions seraient inutiles si on ne pouvait pas profiter de la réponse :
```
$.ajax({
    url: "page.php"
}).done(function(){
    console.log("C'est fini!");
});
```
`.done()` est une methode permettant de spécifier une fonction a exécuter quand la requête a été correctement exécutée et que la réponse est arrivée.
`.success()` est un équivalent à `.done()`.
---

D'autres methodes peuvent être utilisées en fonction des résultats attendus :

`.fail()` s'exécute quand la requête n'a pas abouti ou si une erreur a été renvoyée

`.always()` s'exécutera toujours, quel que soit le résultat 
```
$.ajax({
    url: "page.php"
}).done(function(){
    console.log("C'est fini!");
}).fail(function(){
    console.log("Petit problème!");
});
```
Dans le cas d'une requête correctement exécutée, on reçoit en argument de la fonction la réponse du serveur :
```
$.ajax({
    url: "page.php"
}).done(function(reponse){
    console.log(reponse); // Affiche le contenu de la réponse du serveur
});
```
