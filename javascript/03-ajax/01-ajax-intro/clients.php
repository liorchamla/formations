<?php

$clients = [
  ["lastName" => "Chamla", "firstName" => "Lior", "chiffreAffaire" => 20000],
  ["lastName" => "Pernin", "firstName" => "Magali", "chiffreAffaire" => 10000],
  ["lastName" => "Bremond", "firstName" => "Ludovic", "chiffreAffaire" => 40000],
];

?>
<ul>
    <!-- Pour chaque client dans le tableau clients -->
    <?php foreach($clients as $client): ?>
        <li><strong><?php echo $client['firstName'] ?></strong> <?php echo $client['lastName'] ?> (<?php echo $client['chiffreAffaire'] ?>)</li>
    <?php endforeach; ?>
</ul>