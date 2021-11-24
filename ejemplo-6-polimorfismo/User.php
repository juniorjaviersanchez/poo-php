<?php
//Creamos una clase llamada User
class User extends Inicio
{
    // Le pasamos el parámetro "$name" al constructor
    public function __construct($name)
    {
        $this->name = $name;
    }
}