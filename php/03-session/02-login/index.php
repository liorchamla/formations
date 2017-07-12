<?php
/**
 * Lançons la session
 */
session_start();

/**
 * Si il existe une information nommée 'action' dans le GET
 */
if(array_key_exists('action', $_GET)){
    // Si l'action est égale à "login"
    if($_GET['action'] == "login"){
        // On créé une variable "user" dans la session et cette variable
        // est un tableau qui contient deux éléments :
        // lastName : c'est le nom de famille (mettez le votre)
        // firstName : c'est le prénom de l'utilisateur
        $_SESSION['user'] = [
          "lastName" => "Chamla",  
          "firstName" => "Lior"
        ];
    } 
    // Sinon, si l'action donnée en get est "disconnect"
    else if($_GET['action'] == "disconnect"){
        // On dit que la variable "user" de la session est null .. Y a rien dedans
        $_SESSION['user'] = null;
    }
}

?>
<h1>Connecté ou pas connecté ?</h1>
<!-- Si la variable "user" dans la session n'est pas nulle, c'est bien
    qu'on a un utilisateur connecté -->
<?php if($_SESSION['user'] !== null): ?>
    <a href="mon-compte.php">Mon compte</a>
    <a href="index.php?action=disconnect">Déconnexion ?</a>
<!-- Sinon, c'est qu'on n'a personne de connecté et on propose donc la connexion -->
<?php else: ?>
    <p>Vous n'êtes pas connecté !</p>
    <a href="index.php?action=login">Connexion !</a>
<?php endif; ?>