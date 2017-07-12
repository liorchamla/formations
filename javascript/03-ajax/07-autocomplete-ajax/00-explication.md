# Utilisation du plugin jQuery autocomplete
Dans ce petit cours, nous ne codons pas grand chose, nous utilisons un plugin de jQuery appelé "autocomplete" développé par DevBridge et dont on peut trouver toutes les informations ici : https://www.devbridge.com/sourcery/components/jquery-autocomplete/

# Le but 
Quand l'utilisateur tape des mots dans un champ texte, on veut lui proposer une recherche qui correspond à ce qu'il a commencé à demander.

# Structure HTML
Notre page ne contient qu'un simple ```<input id="search">``` et une balise ```<script>``` qui va servir à mettre en place le plugin d'autocomplétion !

# Fonctionnement PHP
Nous voulons une page search.php qui puisse aller chercher les recherches qui correspondent à celle que l'utilisateur est en train de taper et qui renvoie un résultat formaté spécifiquement en JSON.

# Explication du phénomène
* Le plugin jQuery autocomplete de DevBridge se branche sur un input. 
* A chaque fois que le visiteur tape une lettre dans l'input, le plugin va appeler le fichier search.php en AJAX en lui donnant le contenu de l'input
* Le script search.php va répondre un JSON formaté d'une certaine manière et qui correspond aux propositions qu'on veut faire à l'utilisateur
* Alors, le plugin autocomplete qui reçoit ce JSON créé des divs sous l'input en proposant les propositions renvoyées par le script !