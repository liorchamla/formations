<?php
/**
 * Ce fichier nous permet de gérer les informations du formulaire de connexion
 */
 
// On lance le gestionnaire de sessions
session_start();

// Si le formulaire a bien été rempli
if(array_key_exists('username', $_POST) && array_key_exists('password', $_POST)){
    // On récupère les informations du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // On se connecte à la base de données via PDO
    $db = new PDO('mysql:host=localhost;dbname=test_login;charset=utf8', 'liorchamla', '');
    
    // On créé une requête préparée qui va permettre de sélectionner les utilisateurs
    // qui possèdent cet username et ce password
    $preparation = $db->prepare('SELECT * FROM users WHERE username = :user AND password = :pass');
    $preparation->bindParam(':user', $username);
    $preparation->bindParam(':pass', $password);
    // On exécute la requête
    $preparation->execute();
    // On lit les données renvoyées
    $user = $preparation->fetch();
    // Si il y  a bien un utilisateur qui correspond, alors la personne est authentifiée
    if($user != false){
        // Connexion réussi
        $_SESSION['user'] = $user;
        $_SESSION['connecte'] = true;
        
        header('Location: index.php');
    }
}

// Si la personne n'est pas authentifiée, on affiche un retour d'erreur
?>
<h1>Nous ne vous avons pas trouvé</h1>
<p>Vous vous êtes surement trompé de login ou de mot de passe</p>
<a href="index.php">Retour à l'accueil</a>