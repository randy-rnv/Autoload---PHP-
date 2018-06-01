<?php

class Voiture
{
    private $vitesse;

    public function __construct($vitesse){
        $this->vitesse = $vitesse;
    }
    

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }
}