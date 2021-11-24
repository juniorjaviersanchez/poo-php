<?php
class User 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // Se utilizar "final" para que las clases que lo hereden, no puedan sobreescribir el método
    final public function getName()
    {
        return "I am $this->name <br>";
    }
}