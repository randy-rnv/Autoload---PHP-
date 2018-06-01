<?php

class Test
{
    private $something;

    public function __construct($thing){
        $this->something = $thing;
    }

    /**
     * Get the value of something
     */ 
    public function getSomething()
    {
        return $this->something;
    }

    /**
     * Set the value of something
     *
     * @return  self
     */ 
    public function setSomething($something)
    {
        $this->something = $something;

        return $this;
    }
}