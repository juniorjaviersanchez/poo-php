<?php

require_once 'Person.php';
require_once 'Admin.php';
require_once 'User.php';

$oUser = new User;

$oUser->type = new Admin;

var_dump( $oUser->type->greet());