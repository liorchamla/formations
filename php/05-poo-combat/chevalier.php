<?php

require_once 'personnage.php';

class Chevalier extends Personnage {
    
    public function frapper(Personnage $ennemi){
        var_dump("$this->nom attaque {$ennemi->getNom()} et tente d'infliger $this->pointsAttaque points d'attaque !");
        $ennemi->recevoirDegats($this->pointsAttaque);
    }
    
    public function recevoirDegats($degats){
        $degatsRecus = round($degats * 0.85);
        $this->pointsVie = $this->pointsVie - $degatsRecus;
        var_dump("$this->nom est attaqué et perd $degatsRecus points de vie ! Il lui reste donc $this->pointsVie points de vie !");
    }
}

?>