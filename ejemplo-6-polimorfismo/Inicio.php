<?php
abstract class Inicio
{
    protected $name;

    protected function getClassName()
    {
        // Devuelve el nombre de la clase
        return get_called_class();
    }

    public function login()
    {
        return "Mi nombre es {$this->name} desde la clase {$this->getClassName()} <br>";
    }
}