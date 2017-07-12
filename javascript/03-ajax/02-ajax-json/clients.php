<?php

$clients = [
  ["lastName" => "Chamla", "firstName" => "Lior", "chiffreAffaire" => 20000],
  ["lastName" => "Pernin", "firstName" => "Magali", "chiffreAffaire" => 10000],
  ["lastName" => "Bremond", "firstName" => "Ludovic", "chiffreAffaire" => 40000],
  ["lastName" => "Dihl", "firstName" => "Marjolaine", "chiffreAffaire" => 5000],
];

echo json_encode($clients);

?>