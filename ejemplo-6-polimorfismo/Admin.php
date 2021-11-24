<?php
// Creamos una clase llamada Admin
class Admin extends Inicio
{
    // Le pasamos el parámetro "$name" al constructor
    public function __construct($name)
    {
        $this->name = $name;
    }
}