<?php

// la class Chat sera automatiquement chargé par l'autoloader

class Personne
{
    private $name;
    private $pet;

    public function __construct($name = "Kenny Cartman"){
        $this->name = $name;
    }
    
        /**
     * Get the value of pet
     */ 
    public function getPet()
    {
        return $this->pet;
    }

    /**
     * Set the value of pet
     *
     * @return  self
     */ 
    public function setPet($pet)
    {
        $chat = new Chat($pet); /**************************************** */
        $this->pet = $chat;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}