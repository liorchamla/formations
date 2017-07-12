<?php
session_start();

$_SESSION['user'] = null;
$_SESSION['logged'] = false;

header('Location: index.php');

?>