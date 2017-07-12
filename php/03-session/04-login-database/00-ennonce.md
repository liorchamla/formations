# TP Sessions : Mettre en place un login !
Dans cet exercice, je vous demanderai de mettre en place un véritable système de login (pas aussi sécurisé qu'on le voudrait mais c'est pour l'exemple)

# La base de données
## Préalable
Pour pouvoir bénéficier de PHPMyAdmin sur Cloud9, vous devrez ouvrir un terminal (```ALT+T``` ou ```Widow / New Terminal```) et taper dedans : ```phpmyadmin-ctl install```. Il va lancer l'installation de PHPMyAdmin et vous dire comment vous y connecter !
## Création
Créez une base de données spécifique à l'exercice. Son nom pourrait être par exemple "_test_login_".


Elle contiendra une seule table "_users_" qui contiendra les champs suivants :
* __id__ : un entier en auto incrément qui sert de clé primaire
* __username__ : un varchar(255)
* __lastname__ : un varchar(255)
* __firstname__ : un varchar(255)
* __password__ : un varchar(255)

Insérez 2 ou 3 utilisateurs qui vous serviront lors des tests

# Fichier index.php
Dans un fichier __index.php__, créez un ```<form>``` dont l'action ira sur un fichier __connexion.php__ en méthode __post__

Ce formulaire contiendra :
* un ```<input type="text">```dont le nom sera __username__
* un ```<input type="password">``` dont le nom sera __password__
* un ```<button type="submit">``` qui affichera "_Connexion_"

# Fichier connexion.php
C'est ce fichier qui va contenir le traitement du formulaire qui se trouve dans la page __index.php__

Il s'agira donc de :
1) Récupérer les informations envoyées en __post__
2) Se connecter à la base de données grâce à notre ami __PDO__
3) Ecrire une requête qui va aller sélectionner les utilisateurs qui ont le __username__ fourni et le __password__ fourni
4) Deux solutions s'offrent à nous :
    1) Soit la requête renvoie bien un utilisateur qui correspond à cet username et à ce password, la personne est donc authentifiée : elle existe dans la base de données
        1) Dans ce cas, on créé dans la __session__ une variable __user__ qui contient les informations de l'utilisateur
        2) On redirige vers le fichier __index.php__ !
    2) Soit la requête ne renvoie aucun résultat, et ça prouve que le mec est un charlattan (ou qu'il s'est trompé)
        1) On ne redirige nulle part, on affiche juste "_Désolé mais on ne vous connait pas !_"
        2) On affiche un lien "Retour à l'accueil" qui ramène vers __index.php__
        
# Conseils
N'oubliez pas que tout cet exercice repose sur les sessions ! Il faudra donc que vos fichiers fassent appel à la fonction ```session_start()```

Aussi, il serait cool que le fichier __index.php__ n'affiche pas le formulaire de connexion si la personne est déjà connectée .. Un ```if``` ferait largement l'affaire ;-)