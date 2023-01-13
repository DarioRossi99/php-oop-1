<?php

// la classe (in questo caso) descrive come e' fatto un film
class Movie {
    private $name;
    private $type;

    public function setName($_name)
    {
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }

    public function setType($_type)
    {
        $this->type = $_type;
    }

      public function getType(){
        return $this->type;
    }

}

