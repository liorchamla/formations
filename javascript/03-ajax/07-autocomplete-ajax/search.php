<?php

$termes = $_GET['query'];

$termes = explode(' ', $termes);
$termes = join('%',$termes);

$db = new PDO('mysql:host=localhost;dbname=autocomplete;charset=utf8', 'liorchamla', '');

$results = $db->prepare('SELECT term AS value FROM search_terms WHERE term LIKE :term LIMIT 0,4');
$results->execute([':term' => "%".$termes."%"]);

$suggestions = $results->fetchAll(PDO::FETCH_ASSOC);

$objetJSON = [
    "query" => $_GET['query'],
    "suggestions" => $suggestions
];

echo json_encode($objetJSON);

?>