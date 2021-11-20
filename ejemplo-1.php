<?php

// Creamos la clase User
class User
{
    // Atributo o propiedad type
    public $type;
}

// Creamos la clase Admin
class Admin
{
    // Método saludar - greet
    public function greet()
    {
        return 'Hola mundo xd';
    }
}

// Cremos un ojeto User
$oUser = new User;

// Creamos un objeto Admin
$oAdmin = new Admin;

// Asignamos $oAdmin como atributo type de $oUser
$oUser->type = $oAdmin;

// Mostramos el saludo utilizando $oUser con su respectivo método
echo ($oUser->type->greet());
