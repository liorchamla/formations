<?php
session_start();

if(array_key_exists('username', $_POST) && array_key_exists('password', $_POST)){
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['logged'] = true;
}

header('Location: index.php');

?>