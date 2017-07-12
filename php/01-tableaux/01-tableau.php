<?php

// Déclaration "simplifiée" du tableau
$tableau = [
    10, 
    20, 
    30
];
var_dump($tableau);

// Déclaration "classique" du tableau
$tableau = array(
    10, 
    20, 
    30
);
var_dump($tableau);

// Tableau avec clés 
$tableau = array(
    "nom" => "Chamla",
    "prenom" => "Lior",
    "age" => 30
);
var_dump($tableau);

// Tableau à double dimension :
$tableau = array(
    array(10, 20, 30),
    array(40, 50, 60),
    array(70, 80, 90)
);
var_dump($tableau);

// Tableau à triple dimension :
$tableau = array(
    array(
        array(10,20,30),
        array(40,50,60)
    ),
    array(
        array(70,80,90)
    )
);
var_dump($tableau);

// Tableau à double dimension avec clés :
$tableau = array(
    array(
        "nom" => "Chamla",
        "prenom" => "Lior",
        "notes" => array(
            10, 12, 15   
        )
    ),
    array(
        "nom" => "Pernin",
        "prenom" => "Magali",
        "notes" => array(
            12, 13, 18   
        )
    )
);
var_dump($tableau);

?>