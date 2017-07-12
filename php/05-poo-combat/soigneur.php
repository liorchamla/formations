<?php

require_once 'personnage.php';

class Soigneur extends Personnage {
    
    public function frapper(Personnage $ennemi){
        var_dump("$this->nom ne peut pas frapper car c'est un faible soigneur ! {$ennemi->getNom()} ne reçoit donc aucun dégat !");
    }
    
    public function recevoirDegats($degats){
        $this->pointsVie -= $degats;
        var_dump("$this->nom subit $degats points de dégats ! Il ne lui reste donc que $this->pointsVie points de vie !");
    }
    
    public function soigner(Personnage $allie){
        $pointsVieSoignes = (int) rand(5, 15);
        $pointsVieTotaux = (int) $allie->getPV() + $pointsVieSoignes;
        $allie->setPV($pointsVieTotaux);
        
        var_dump("$this->nom soigne {$allie->getNom()} et lui rend $pointsVieSoignes ! {$allie->getNom()} possède donc désormais {$allie->getPV()} points de vie !");
    }
}

?>