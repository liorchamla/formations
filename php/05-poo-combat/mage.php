<?php

require_once 'personnage.php';

class Mage extends Personnage {
    protected $puissance = 30;
    protected $mana = 40;
    
    public function frapper(Personnage $ennemi){
        if($this->mana >= 20){
            var_dump("$this->nom lance un sort maléphique sur {$ennemi->getNom()} et lui inflige $this->puissance points de dégats !");
            $ennemi->recevoirDegats($this->puissance);
            $this->mana -= 20;
        } else {
            var_dump("$this->nom n'a plus de mana ! Il ne peut donc pas attaquer {$ennemi->getNom()} !");
        }
    }
    
    public function recevoirDegats($degats){
        $this->pointsVie -= $degats;
        var_dump("$this->nom subit $degats points de dégats ! Il ne lui reste donc que $this->pointsVie points de vie !");
    }
}

?>