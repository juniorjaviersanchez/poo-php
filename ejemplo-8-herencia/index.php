<?php 

require_once 'User.php';
require_once 'Admin.php';

$user = new User('Elmer');
echo $user->getName();

$admin = new Admin('Javier');
echo $admin->getName();