<?php
require_once 'Inicio.php';
require_once 'Guest.php';
require_once 'User.php';
require_once 'Admin.php';

// Creamos un objeto de Guest para mostrar el login
$oGuest = new Guest;
echo ($oGuest->login());

// Creamos un objeto de User para mostrar el login, además le pasamos el nombre
$oUser = new User('Junior');
echo ($oUser->login());

// Creamos un objeto de Guest para mostrar el login, además le pasamos el nombre
$oUser = new Admin('Administrador');
echo ($oUser->login());
