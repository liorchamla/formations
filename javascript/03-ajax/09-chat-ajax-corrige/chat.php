<?php

// Créons une connexion à la baase de données via PDO
$db = new PDO('mysql:host=localhost;dbname=ajax_chat;charset=utf8', 'liorchamla', '');

// Par défaut, la tâche à accomplir s'appelle getLogs
$task = 'getLogs';
// SI quelqu'un précise en GET une task différente (chat.php?task=postMessage par exemple)
// alors, la task doit devenir celle demandée en GET
if(!empty($_GET['task'])){
    $task = $_GET['task'];
}

// Selon la tache à accomplir
switch($task){
    // Dans le cas où la tâche est postMessage
    case 'postMessage':
        // J'appelle la fonction save_post_message() qui va servir à sauvegarde un nouveau
        // message
        save_post_message();
        break;
    default:
        // Dans tous les autres cas, par défaut, j'appelle la fonction display_chat_logs()
        // qui va afficher EN JSON les derniers messages postés.
        display_chat_logs();
        break;
}

/**
 * Cette fonction sert à enregistre le message envoyé en POST
 */
function save_post_message(){
    // On va se servir de la connexion à la base de données que j'ai créé en dehors de la fonction
    // Si je veux l'utiliser dans ma fonction, je dois utiliser le mot clé global
    global $db;
    // Je récupère les données envoyées par le POST (par le formulaire)
    $author  = $_POST['author'];
    $message = $_POST['message'];
    
    // Je créé une requête préparée (qu'on appelle aussi une requête paramétrée)
    $statement = $db->prepare('INSERT INTO messages SET author = :author, content = :message, moment = NOW()');
    $statement->execute([
        ':author' => $author,
        ':message' => $message
    ]);
    
    echo json_encode(['state' => 'success', 'message' => 'Message correctement enregistré']);
    exit();
}

/**
 * Cette fonction sert à afficher les 20 derniers messages du chat par ordre de date descendant
 */
function display_chat_logs(){
    // on va se servir de la connexion PDO
    global $db;
    // On fait notre requête
    $resultat = $db->query('SELECT * FROM messages ORDER BY moment DESC LIMIT 20');
    // On récupère sous forme de tableau les résultats dans une variable $messages
    $messages = $resultat->fetchAll(PDO::FETCH_ASSOC);
    
    // On convertit en JSON et on affiche le tableau des messages
    echo json_encode($messages);
    exit();
}

?>