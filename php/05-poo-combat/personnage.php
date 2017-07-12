<?php

abstract class Personnage {
    protected $nom;
    protected $pointsVie = 100;
    protected $pointsAttaque = 20;
    
    public function setNom($valeur){
        $this->nom = strtoupper($valeur);
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function setPV($valeur){
        if(is_int($valeur)){
            $this->pointsVie = $valeur;
        }
    }
    
    public function getPV(){
        return $this->pointsVie;
    }
    
    public function setPA($valeur){
        if(is_int($valeur)){
            $this->pointsAttaque = $valeur;
        }   
    }
    
    public function getPA(){
        return $this->pointsAttaque;
    }
    
    public function __construct($_nom, $_PV = 100, $_PA = 20){
        $this->setNom($_nom);
        $this->setPV($_PV);
        $this->setPA($_PA);
    }
    
    abstract public function frapper(Personnage $ennemi);
    
    abstract public function recevoirDegats($degats);
}

?>